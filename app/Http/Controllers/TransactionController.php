<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;
use App\Transaksi;
use App\Extra;
use App\Detail;
Use Auth;
use Carbon\Carbon;
use Veritrans_Config;
use Veritrans_Snap;
use Veritrans_Notification;


class TransactionController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
        // Set midtrans configuration
        Veritrans_Config::$serverKey = config('services.midtrans.serverKey');
        Veritrans_Config::$isProduction = config('services.midtrans.isProduction');
        Veritrans_Config::$isSanitized = config('services.midtrans.isSanitized');
        Veritrans_Config::$is3ds = config('services.midtrans.is3ds');
    }

    public function tender($id_ruangan)
    {
        $tender = \App\Ruangan::find($id_ruangan);
        return view ('transaksi.tender',['tender' => $tender]);
    }


    public function create(Request $request)
    {
        // $this->validate($request,[
        //     'nama_ruangan' => 'required|min:5|unique:ruangan',
        //     'harga' => 'required|numeric',
        //     'ukuran' => 'required|numeric',
        //     'kapasitas' => 'required||numeric',
        //     'alamat_ruangan' => 'required',
        //     'deskripsi' => 'required',
        //     ]);

        //helper datetime now
        $tgl_transaksi = Carbon::now();
            
		Transaksi::create([
            'tgl_transaksi' => $tgl_transaksi,
            'user_id' => Auth::user()->id,
            'nama' => $request->nama,
            'email' => $request->email,
            'tlp' => $request->tlp,
            'alamat' => $request->alamat,
            'tgl_reservasi' => $request->tgl_reservasi,
            'tgl_selesai' => $request->tgl_selesai,
            'id_ruangan' => $request->id_ruangan,
            'status_reservasi' => 0,
            'status_bayar' => 'pending',
		]);
        return redirect('/');
    }
    
    public function transaction($id_transaksi)
    {
        // $trans = \App\Transaksi::find($id_transaksi);
        // return view ('transaksi.transaction',['trans' => $trans]);
        
        // $trans = DB::table('transaksi')
        // ->select('transaksi.*','ruangan.nama_ruangan as ruangan_nama')
        // ->join('ruangan','ruangan.id_ruangan','=','transaksi.id_ruangan')
        // ->where('transaksi.id_transaksi',$id_transaksi)->get();
        // return view ('transaksi.transaction',compact('trans'));
        
        //join table transaksi and ruangan
        $trans = Transaksi::join('ruangan','ruangan.id_ruangan','=','transaksi.id_ruangan')
        //select field in ruangan table
        ->select('transaksi.*','ruangan.nama_ruangan as ruangan_nama', 'ruangan.kapasitas as kapasitas', 'ruangan.foto as foto', 'ruangan.alamat_ruangan as ruangan_alamat', 'ruangan.harga as ruangan_harga', 'ruangan.kecamatan as ruangan_kecamatan', 'ruangan.kabupaten as ruangan_kabupaten', 'ruangan.provinsi as ruangan_provinsi', 'ruangan.kategori_id_kategori as ruangan_kategori_id')
        //to find id transaksi
        ->where('transaksi.id_transaksi',$id_transaksi)
        ->first();
        // return $trans;
        return view ('transaksi.transaction',compact('trans'));
    }

    public function transactionUpdate(Request $request, $id_transaksi)
    {
        $ruangan = Transaksi::join('ruangan','ruangan.id_ruangan','=','transaksi.id_ruangan')
        //select field in ruangan table
        ->select('transaksi.*','ruangan.nama_ruangan as ruangan_nama', 'ruangan.kapasitas as kapasitas', 'ruangan.foto as foto', 'ruangan.alamat_ruangan as ruangan_alamat', 'ruangan.harga as ruangan_harga', 'ruangan.kecamatan as ruangan_kecamatan', 'ruangan.kabupaten as ruangan_kabupaten', 'ruangan.provinsi as ruangan_provinsi', 'ruangan.kategori_id_kategori as ruangan_kategori_id')
        //to find id transaksi
        ->where('transaksi.id_transaksi',$id_transaksi)
        ->first();
        
        $trans = \App\Transaksi::find($id_transaksi);

        $tgl1 = Carbon::parse($trans->tgl_selesai);
        $tgl2 = Carbon::parse($trans->tgl_reservasi);
        $lamasewa = $tgl1->diffInDays($tgl2);

        Transaksi::whereid_transaksi($id_transaksi)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'tlp' => $request->tlp,
            'alamat' => $request->alamat,
            'total_bayar' => $ruangan->ruangan_harga*$lamasewa+(($ruangan->ruangan_harga*$lamasewa)*0.05),
            
        ]);


        $payload = [
            'transaction_details' => [
                'order_id'      => $trans->id_transaksi,
                'gross_amount'  => $trans->total_bayar,
            ],
            'customer_details' => [
                'first_name'    => $trans->nama,
                'email'         => $trans->email,
                'phone'         => $trans->tlp,
                'address'       => $trans->alamat,
            ],
            'item_details' => [
                [
                    'id'       => $trans->id_ruangan,
                    'price'    => $trans->total_bayar,
                    'quantity' => 1,
                    'name'     => ucwords(str_replace('_', ' ', $trans->id_ruangan))
                ]
            ]
        ];
        $snapToken = Veritrans_Snap::getSnapToken($payload);
        $trans->snap_token = $snapToken;
        $trans->save();

        // Beri response snap token
        $this->response['snap_token'] = $snapToken;
        return response()->json($this->response);
        // return redirect('/transaction/{id_transaksi}/extra')->with('sukses','Data berhasil diupdate!');
        
    }

    /**
     * Midtrans notification handler.
     *
     * @param Request $request
     * 
     * @return void
     */
    public function notificationHandler(Request $request)
    {
        $notif = new Veritrans_Notification();
        \DB::transaction(function() use($notif) {
 
          $transaction = $notif->transaction_status;
          $type = $notif->payment_type;
          $orderId = $notif->order_id;
          $fraud = $notif->fraud_status;
          $donation = Donation::findOrFail($orderId);
 
          if ($transaction == 'capture') {
 
            // For credit card transaction, we need to check whether transaction is challenge by FDS or not
            if ($type == 'credit_card') {
 
              if($fraud == 'challenge') {
                // TODO set payment status in merchant's database to 'Challenge by FDS'
                // TODO merchant should decide whether this transaction is authorized or not in MAP
                // $donation->addUpdate("Transaction order_id: " . $orderId ." is challenged by FDS");
                $donation->setPending();
              } else {
                // TODO set payment status in merchant's database to 'Success'
                // $donation->addUpdate("Transaction order_id: " . $orderId ." successfully captured using " . $type);
                $donation->setSuccess();
              }
 
            }
 
          } elseif ($transaction == 'settlement') {
 
            // TODO set payment status in merchant's database to 'Settlement'
            // $donation->addUpdate("Transaction order_id: " . $orderId ." successfully transfered using " . $type);
            $donation->setSuccess();
 
          } elseif($transaction == 'pending'){
 
            // TODO set payment status in merchant's database to 'Pending'
            // $donation->addUpdate("Waiting customer to finish transaction order_id: " . $orderId . " using " . $type);
            $donation->setPending();
 
          } elseif ($transaction == 'deny') {
 
            // TODO set payment status in merchant's database to 'Failed'
            // $donation->addUpdate("Payment using " . $type . " for transaction order_id: " . $orderId . " is Failed.");
            $donation->setFailed();
 
          } elseif ($transaction == 'expire') {
 
            // TODO set payment status in merchant's database to 'expire'
            // $donation->addUpdate("Payment using " . $type . " for transaction order_id: " . $orderId . " is expired.");
            $donation->setExpired();
 
          } elseif ($transaction == 'cancel') {
 
            // TODO set payment status in merchant's database to 'Failed'
            // $donation->addUpdate("Payment using " . $type . " for transaction order_id: " . $orderId . " is canceled.");
            $donation->setFailed();
 
          }
 
        });
 
        return;
    }

    // private function _generatePaymentToken($trans)
    // {
    //    $this->initPaymentGateway();
    //    $customerDetails = [
    //         'nama' => $trans->nama,
    //         'email' => $trans->email,
    //         'tlp' => $trans->tlp,
    //         'alamat' => $trans->alamat,
    //    ];

    //    $params = [
    //        'enable_payments' => \App\Models\Payment::PAYMENT_CHANNELS,
    //        'transaction_details' => [
    //        'order_id' => $trans->id_transaksi,
    //        'gross_amount' => $trans->total,
    //        ],
    //        'customer_details' => $customerDetails,
    //        'expiry' => [
    //            'start_time' => date('Y-m-d H:i:s T'),
    //            'unit' => '1',
    //            'duration' => 'days',
    //        ],
    //    ];

    //    dd($params);
    // }

    public function transactionExtra($id_transaksi)
    {
        $extra = \App\Extra::all();
        return view ('transaksi.extra',compact('extra'));
    }

    public function extrasBook(Request $request, $id)
    {
        $extra = Extra::where('id',$id)->first();
        $transaksi = Transaksi::select('id_transaksi',$id)
        ->where('user_id', Auth::user()->id)
        ->where('status_reservasi',1)
        ->first();

        // $ruangan = Detail::join('transaksi','transaksi.id_transaksi','=','transaksi.id_transaksi')
        // //select field in ruangan table
        // ->select('detail.*','detail.id_transaksi as transaksi_id')
        // //to find id transaksi
        // ->where('user_id', Auth::user()->id)
        // ->where('status_reservasi',2)
        // ->first();

        // dd($transaksi);
        $detail = new Detail;
        $detail->transaksi_id_transaksi = $transaksi;
        $detail->user_id = Auth::user()->id;
        $detail->extra_id = $extra->id;
        $detail->jumlah = $request->jumlah;
        $detail->total = $request->jumlah*$extra->harga;
        $detail->save();

        return redirect('/transaction/{id_transaksi}/extra');
    }
}

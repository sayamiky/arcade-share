<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Ruangan;
use DB;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $tender = Transaksi::join('ruangan','ruangan.id_ruangan','=','transaksi.id_ruangan')
        ->select('transaksi.*','ruangan.nama_ruangan as ruangan_nama')->get();
        return view ('transaksi.index',compact('tender'));
    }

    public function tenderDetail($id_transaksi)
    {
        $tender = \App\Transaksi::find($id_transaksi)->first();
        $das = \App\Transaksi::join('ruangan','ruangan.id_ruangan','=','transaksi.id_ruangan')
        ->select('transaksi.*','ruangan.nama_ruangan as ruangan_nama')->get();
        // $tender = Transaksi::find($id_transaksi)
        // ->join('ruangan','ruangan.id_ruangan','=','transaksi.id_ruangan')
        // ->select('transaksi.*','ruangan.nama_ruangan as ruangan_nama')
        // ->get();
        return view ('transaksi.tenderdetail',compact('tender','das'));
    }
    
    public function update(Request $request, $id_transaksi)
    {
        $tender = \App\Transaksi::find($id_transaksi);
        // $tender->update($request->all());
        // $pegawai = Pegawai::find($id);
        $tender->status_reservasi = $request->status_reservasi;
        return redirect('/admin/transaksisewa')->with('sukses','Data berhasil diupdate!');
    }

    public function decline($id_transaksi)
    {
        $tender = Transaksi::find($id_transaksi);
        $tender->update(['status_reservasi' => 2]);
        return redirect('/admin/transaksisewa')->with('sukses','Data berhasil diupdate!');
    }

    public function approve($id_transaksi)
    {
        $tender = Transaksi::find($id_transaksi);
        $tender->update(['status_reservasi' => 1]);
        return redirect('/admin/transaksisewa')->with('sukses','Data berhasil diupdate!');
    }
// public function completedUpdate(Request $request, Transaksi $tender)
// {
//     $tender = DB::table('transaksi')->get();
//         foreach($tender as $tender) {
//             if ( $tender->status_reservasi == 0 ) {
//                 // DB::table('transaksi')->update(['status_reservasi', 1]);
//                 DB::table('transaksi')->where('status_reservasi',0)->update(['status_reservasi' => 1]);
//             }
//         }
//         $tender->status_reservasi = $request->changeStatus;
//     return redirect()->back()->with('message', 'Status changed!');
// }
    
}

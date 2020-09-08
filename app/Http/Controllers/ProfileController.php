<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transaksi;
use App\Ruangan;
use Auth;
use DB;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $profile = \App\User::find($id);
        return view ('auth.profile',['profile' => $profile]);
    }

    // public function confirm($id)
    // {
    //     //join transaksi and ruangan table
    //     $ruangan = Transaksi::join('ruangan','ruangan.id_ruangan','=','transaksi.id_ruangan')
    //     //to take rooms name from ruangan tb
    //     ->select('transaksi.*','ruangan.nama_ruangan as ruangan_nama')
    //     // to take user who login reservation status confirm from transaksi tb 
    //     ->where('user_id', Auth::user()->id)->where('status_reservasi', '=', 1)->get();
    //     return view ('auth.history',compact('ruangan'));
    // }

    public function confirm($id)
    {
        //join transaksi and ruangan table
        $ruangan = Transaksi::join('ruangan','ruangan.id_ruangan','=','transaksi.id_ruangan')
        //to take rooms name from ruangan tb
        ->select('transaksi.*','ruangan.nama_ruangan as ruangan_nama')
        // to take user who login reservation status confirm from transaksi tb 
        ->where('user_id', Auth::user()->id)->get();
        return view ('auth.history',compact('ruangan'));
    }

    public function cancel($id)
    {
        $profile = \App\User::find($id);
        return view ('auth.profile',['profile' => $profile]);
    }

    // public function activity(Request $request)
    // {
    //     $act = \App\Transaksi::where('user_id'->Auth::user())->get();
    //     return view ('auth.profile',['profile' => $profile]);
    // }

    public function edit($id)
    {
        $profile = \App\User::find($id);
        return view ('auth.editprofile',['profile' => $profile]);
    }

    
    public function update(Request $request, $id)
    {
        $profile = \App\User::find($id);
        $file = $request->file('photo');
    
        $nama_file = time()."_".$file->getClientOriginalName();
    
                    // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'userprofile';
        $file->move($tujuan_upload,$nama_file);
        
        User::whereid($id)->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'photo' => $nama_file,
        ]);
        return redirect()->route('profile',['profile' => $profile]);
    }
    
}

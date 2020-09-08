<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;
use App\Transaksi;

class RoomController extends Controller
{
    
    public function index()
    {
        // return view ('ruangan.userview');
        // $data_ruangan = \App\Ruangan::where('id_ruangan', '<' , 4)->get();
        $data_ruangan = \App\Ruangan::all();
        return view ('ruangan.userview',['data_ruangan' => $data_ruangan]);
    }

    public function detail($id_ruangan)
    {
        $room = \App\Ruangan::find($id_ruangan);
        return view ('ruangan.detail',['room' => $room]);
    }


}

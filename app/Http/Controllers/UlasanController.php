<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UlasanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function ulasan(Request $request)
    {
        if ($request->has('cari')) {
            $data_ulasan = \App\Ulasan::where('nama','LIKE','%'.$request->cari.'%')->get();
        }else {
            $data_ulasan = \App\Ulasan::all();
        }
        return view ('ulasan.index',['data_ulasan' => $data_ulasan]);
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|min:3',
            'pekerjaan' => 'required|min:3',
            'perusahaan' => 'required|min:3',
            'desc_ulasan' => 'required',
            ]);

        \App\Ulasan::create($request->all());
        return redirect('/admin/ulasan')->with('sukses','Data berhasil disimpan!');
    }

    public function edit($id_ulasan)
    {
        $ulasan = \App\Ulasan::find($id_ulasan);
        return view ('ulasan.edit',['ulasan' => $ulasan]);
    }

    public function update(Request $request, $id_ulasan)
    {
        $ulasan = \App\Ulasan::find($id_ulasan);
        $ulasan->update($request->all());
        return redirect('/admin/ulasan')->with('sukses','Data berhasil diupdate!');
    }

    public function delete($id_ulasan)
    {
        $ulasan = \App\Ulasan::find($id_ulasan);
        $ulasan -> delete($ulasan);
        return redirect('/admin/ulasan')->with('sukses','Data berhasil dihapus!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function kategori(Request $request)
    {
        if ($request->has('cari')) {
            $data_kategori = \App\Kategori::where('nama_kategori','LIKE','%'.$request->cari.'%')->get();
        }else {
            $data_kategori = \App\Kategori::all();
        }
        return view ('kategori.index',['data_kategori' => $data_kategori]);
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'nama_kategori' => 'required|string',
            'desc_kategori' => 'required',
            ]);

        \App\Kategori::create($request->all());
        return redirect('/admin/kategori')->with('sukses','Data berhasil disimpan!');
    }

    public function edit($id_kategori)
    {
        $kategori = \App\Kategori::find($id_kategori);
        return view ('kategori.edit',['kategori' => $kategori]);
    }

    public function update(Request $request, $id_kategori)
    {
        $kategori = \App\Kategori::find($id_kategori);
        $kategori->update($request->all());
        return redirect('/admin/kategori')->with('sukses','Data berhasil diupdate!');
    }

    public function delete($id_kategori)
    {
        $kategori = \App\Kategori::find($id_kategori);
        $kategori -> delete($kategori);
        return redirect('/admin/kategori')->with('sukses','Data berhasil dihapus!');
    }
}

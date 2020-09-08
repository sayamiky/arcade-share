<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Extra;

class ExtraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function extra(Request $request)
    {
        // if ($request->has('cari')) {
        //     $data_ulasan = \App\Ulasan::where('nama','LIKE','%'.$request->cari.'%')->get();
        // }else {
        //     $data_ulasan = \App\Ulasan::all();
        // }
        $extra = \App\Extra::all();
        return view ('extraa.index',['extra' => $extra]);
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'nama_extra' => 'required|min:3',
            'harga' => 'required|min:3',
            'desc_extra' => 'required',
            'foto' => 'mimes:jpeg,png',
            ]);
            
        $file = $request->file('foto');
		$nama_file = time()."_".$file->getClientOriginalName();
      	// fill with folder location
		$tujuan_upload = 'extra';
        $file->move($tujuan_upload,$nama_file);
        
        Extra::create([
            'nama_extra' => $request->nama_extra,
            'harga' => $request->harga,
            'desc_extra' => $request->desc_extra,
            'foto' => $nama_file,
		]);
        return redirect('/admin/extra')->with('sukses','Data berhasil disimpan!');
    }

    public function edit($id)
    {
        $extra = \App\Extra::find($id);
        return view ('extraa.edit',['extra' => $extra]);
    }

    public function update(Request $request, $id)
    {
        $extra = \App\Extra::find($id);
        //upload file update
        $file = $request->file('foto');
		$nama_file = time()."_".$file->getClientOriginalName();
      	// fill with folder location
		$tujuan_upload = 'extra';
        $file->move($tujuan_upload,$nama_file);

        Extra::whereid($id)->update([
            'nama_extra' => $request->nama_extra,
            'harga' => $request->harga,
            'desc_extra' => $request->desc_extra,
            'foto' => $nama_file,
		]);
        return redirect('/admin/extra')->with('sukses','Data berhasil diupdate!');
    }

    public function delete($id)
    {
        $extra = \App\Extra::find($id);
        $extra -> delete($extra);
        return redirect('/admin/extra')->with('sukses','Data berhasil dihapus!');
    }
}

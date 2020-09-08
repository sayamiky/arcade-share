<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function port(Request $request)
    {
        $port = \App\Portfolio::all();
        return view ('portfolio.index',['port' => $port]); 
    } 

    public function create(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required|min:5',
            'kategori' => 'required',
            'gambar_1' => 'mimes:jpeg,png',
            ]);
            
        // $file = $request->file('gambar_1');
		// $nama_file = time()."_".$file->getClientOriginalName();
        // // isi dengan nama folder tempat kemana file diupload
		// $tujuan_upload = 'portfolio';
        // $file->move($tujuan_upload,$nama_file);
        
        // $files = $request->file('gambar_2');
		// $nama_files = time()."_".$files->getClientOriginalName();
        // // isi dengan nama folder tempat kemana file diupload
		// $tujuan_uploads = 'portfolio';
		// $files->move($tujuan_uploads,$nama_files);
        
		Portfolio::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'gambar_1' =>$request->file('gambar_1')->store('portfolio/gambar', 'public'),
            'gambar_2' => $request->file('gambar_2')->store('portfolio/gambar', 'public'),
            'link' => $request->link,
		]);
        return redirect('/admin/portfolio')->with('sukses','Data berhasil disimpan!');
    }

    public function edit($id)
    {
        $port = \App\Portfolio::find($id);
        return view ('portfolio.edit',['port' => $port]);
    }

    public function update(Request $request, $id)
    {
        $port = \App\Portfolio::find($id);
        // $file = $request->file('gambar_1');
		// $nama_file = time()."_".$file->getClientOriginalName();
        // // isi dengan nama folder tempat kemana file diupload
		// $tujuan_upload = 'portfolio';
        // $file->move($tujuan_upload,$nama_file);
        
        // $port = \App\Portfolio::find($id);
        // $files = $request->file('gambar_2');
		// $nama_files = time()."_".$files->getClientOriginalName();
        // // isi dengan nama folder tempat kemana file diupload
		// $tujuan_uploads = 'portfolio';
        // $files->move($tujuan_uploads,$nama_files);

        if ($request->gambar_1 != null) {
            $file = $request->file('gambar_1')->store('portfolio/gambar', 'public');
        }else{
            $file = $port->gambar_1;
        }

        if ($request->gambar_2 != null) {
            $files = $request->file('gambar_2')->store('portfolio/gambar', 'public');
        }else{
            $files = $port->gambar_2;
        }

        Portfolio::whereid($id)->update([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'gambar_1' => $file,
            'gambar_2' => $files,
            'link' => $request->link,
        ]);
        return redirect('/admin/portfolio')->with('sukses','Data berhasil diupdate!');
    }
    
    public function delete($id)
    {
        $port = \App\Portfolio::find($id);
        $port -> delete($port);
        return redirect('/admin/portfolio')->with('sukses','Data berhasil dihapus!');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function blog(Request $request)
    {
        // if ($request->has('cari')) {
        //     $data_ruangan = \App\Ruangan::where('nama_ruangan','LIKE','%'.$request->cari.'%')->get();
        // }else {
        //     $data_ruangan = \App\Ruangan::all();
        // }
        $data_blog = \App\Blog::all();
        return view ('blog.index',['data_blog' => $data_blog]); 
    } 

    public function create(Request $request)
    {
        // dd($request->kategori);
        // $kategori = explode(",", $request->kategori);
        
        // //insert picture into database
        // $file = $request->file('gambar');
        // //to safe original name of picture 
        // $nama_file = $file->getClientOriginalName();

        // $file = $request->file('gambar');
		// $nama_file = time()."_".$file->getClientOriginalName();
        // // isi dengan nama folder tempat kemana file diupload
		// $tujuan_upload = 'image/blog';
        // $file->move($tujuan_upload,$nama_file);
        
        Blog::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'kategori' => $request->kategori,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->file('gambar')->store('blog/gambar', 'public'),
            // 'nama_file' => $nama_file,
            ]);
            
            return redirect('/admin/blog')->with('sukses','Data berhasil disimpan!');
    }

    public function edit($id)
    {
        $blog = \App\Blog::find($id);
        return view ('blog.edit',['blog' => $blog]);
    }

    public function update(Request $request, $id)
    {
         $blog = \App\Blog::find($id);

        // //insert picture into database
        // $file = $request->file('gambar');
        // //to safe original name of picture 
        // $nama_file = $file->getClientOriginalName();
    
        if ($request->gambar != null ) {
            $file = $request->file('gambar')->store('blog/gambar', 'public');
        }else{
            $file = $blog->gambar;
        }
    
        Blog::whereid($id)->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'kategori' => $request->kategori,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
            'gambar' => $file,
            // 'nama_file' => $nama_file,
        ]);
        return redirect('/admin/blog')->with('sukses','Data berhasil diupdate!');
    }
    
    public function delete($id)
    {
        $blog = \App\Blog::find($id);
        $blog -> delete($blog);
        return redirect('/admin/blog')->with('sukses','Data berhasil dihapus!');
    }


}

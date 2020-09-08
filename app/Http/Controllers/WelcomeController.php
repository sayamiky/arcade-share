<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use app\Blog;
use app\Portfolio;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        // if ($request->has('cari')) {
        //     $data_ruangan = \App\Ruangan::where('nama_ruangan','LIKE','%'.$request->cari.'%')->get();
        // }else {
        //     $data_ruangan = \App\Ruangan::all();
        // }
        // $data_blog = \App\Blog::all();
        // mengambil data pegawai yang id nya lebih besar dari 10
        $data_blog = \App\Blog::where('id', '<' , 4)->get();
        // $data_blog = DB::table('blog')->find(3);
        // $data_blog = \App\Blog::find(3);

        // $data_ruangan = \App\Ruangan::all();
        $data_ruangan = \App\Ruangan::where('id_ruangan', '<' , 9)->get();
        return view ('welcome',compact('data_blog','data_ruangan')); 
        // 
    } 



    public function detail($id)
    {
        $blog = \App\Blog::find($id);
        return view ('blog.detail',['blog' => $blog]);
    }

    public function blogs()
    {
        $blog = \App\Blog::all();
        return view ('blog.blogs',['blog' => $blog]);
    }

    public function portfolio()
    {
        $port = \App\Portfolio::all();
        return view ('portfolio.portfolios',['port' => $port]);
    }

    public function contactus()
    {
        return view ('us.contact');
    }

    public function aboutus()
    {
        return view ('us.about');
    }

}

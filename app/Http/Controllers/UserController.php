<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function user(Request $request)
    {
        if ($request->has('cari')) {
            $data_user = \App\User::where('name','LIKE','%'.$request->cari.'%')->get();
        }else {
            $data_user = \App\User::all();
        }
        return view ('auth.index',['data_user' => $data_user]); 
    } 

    public function edit($id)
    {
        $user = \App\User::find($id);
        return view ('auth.edit',['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = \App\User::find($id);
        $user->update($request->all());
        return redirect('/admin/user')->with('sukses','Data berhasil diupdate!');
    }

    public function delete($id)
    {
        $user = \App\User::find($id);
        $user -> delete($user);
        return redirect('/admin/user')->with('sukses','Data berhasil dihapus!');
    }
}

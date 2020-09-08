<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\User;
use App\Admin;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    
    public function editProfile($id)
    {
        $admin = \App\Admin::find($id);
        return view ('dashboard.editprofile',compact('admin'));
    }

    public function updateProfile(Request $request, $id)
    {
        $admin = \App\Admin::find($id);
        if ($request->photo != null ) {
            $file = $request->file('photo')->store('profile/admin', 'public');
        }else{
            $file = $admin->photo;
        }
        Admin::whereid($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'photo' => $file,
        ]);
        return redirect()->route('dashboard.updateProfile',['admin' => $admin]);
    }

    public function editPass($id)
    {
        $admin = \App\Admin::find($id);
        return view ('dashboard.editpass',compact('admin'));
    }

    public function updatePass(Request $request, $id)
    {
        $admin = \App\Admin::find($id);
        Admin::whereId($id)->update([
            'password' => bcrypt($request->password),
        ]);
        return view ('dashboard.editpass',compact('admin'));
    }
}

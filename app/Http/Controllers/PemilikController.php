<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemilik;
use App\Exports\PemilikExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class PemilikController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pemilik.index');
    }

    public function pemilik(Request $request)
    {
        // if ($request->has('cari')) {
        //     $data_admin = \App\Admin::where('name','LIKE','%'.$request->cari.'%')->get();
        // }else {
        //     $data_admin = \App\Admin::all();
        // }
        $data_pemilik = \App\Pemilik::all();
        return view ('pemilik.index',['data_pemilik' => $data_pemilik]);
        
    }

    public function store(Request $request)
    {    
        $this->validate($request,[
            'name' => 'required|min:3',
            'phone' => 'required|numeric',
            'address' => 'required',
            'email' => 'required|email|unique:owners',
            'password' => 'required|min:8',
        ]);

        Pemilik::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/admin/pemilik')->with('sukses','Data berhasil disimpan!');
    } 

    public function edit($id)
    {
        $pemilik = \App\Pemilik::find($id);
        return view ('pemilik.edit',['pemilik' => $pemilik]);
    }

    public function up(Request $request, $id)
    {
        $pemilik = \App\Pemilik::find($id);
        // $admin->update($request->all());
        // whereId($id)->update($request->all());
        Pemilik::whereId($id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/admin/pemilik')->with('sukses','Data berhasil diupdate!');
    }

    public function delete($id)
    {
        $pemilik = \App\Pemilik::find($id);
        $pemilik -> delete($pemilik);
        return redirect('/admin/pemilik')->with('sukses','Data berhasil dihapus!');
    } 

    public function exportExcel() 
    {
        return Excel::download(new PemilikExport, 'Pemilik.xlsx');
    }

    public function exportPdf()
    {
        $pemilik = \App\Pemilik::all();
        $pdf = PDF::loadView('exportdata.pemilik', ['pemilik' => $pemilik]);
        return $pdf->download('Pemilik.pdf');
    }

}

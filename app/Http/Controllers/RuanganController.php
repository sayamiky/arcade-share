<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;
use App\Kategori;
use App\Pemilik;
use App\Provinsi;
class RuanganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function ruangan(Request $request)
    {
        // if ($request->has('cari')) {
        //     $data_ruangan = \App\Ruangan::where('nama_ruangan','LIKE','%'.$request->cari.'%')->get();
        // }else {
        //     $data_ruangan = \App\Ruangan::all();
        // }
        $data_ruangan = \App\Ruangan::all();
        $kategori = \App\Kategori::all();
        $pemilik = \App\Pemilik::all();
        return view ('ruangan.index', compact('data_ruangan','kategori','pemilik')); 
    } 
    
    
    public function getProvinsiList(Request $request, $id)
    {
            $provinsi = DB::table("provinsi")->pluck("nama","id");
            return view('ruangan.index',compact('provinsi'));
    }
    
    public function getKabupatenList(Request $request)
    {
        $kabupaten = DB::table("kabupaten")
        ->where("provinsi_id",$request->provinsi_id)
        ->pluck("nama","id");
        return response()->json($kabupaten);
    }

    public function getKecamatanList(Request $request)
    {
        $cities = DB::table("kecamatan")
        ->where("kabupaten_id",$request->kabupaten_id)
        ->pluck("nama","id");
        return response()->json($kecamatan);
    }
    
    public function create(Request $request)
    {
        $this->validate($request,[
            'nama_ruangan' => 'required|min:5|unique:ruangan',
            'harga' => 'required|numeric',
            'ukuran' => 'required|numeric',
            'kapasitas' => 'required||numeric',
            'alamat_ruangan' => 'required',
            'deskripsi' => 'required',
            'foto' => 'mimes:jpeg,png',
            ]);
            
        // $file = $request->file('foto');
		// $nama_file = time()."_".$file->getClientOriginalName();
      	// // fill with folder location
		// $tujuan_upload = 'ruangan';
		// $file->move($tujuan_upload,$nama_file);
        
    
		Ruangan::create([
            'nama_ruangan' => $request->nama_ruangan,
            'kategori_id_kategori' => $request->kategori_id_kategori,
            'pemilik_id' => $request->pemilik_id,
            'harga' => $request->harga,
            'layout' => $request->file('layout')->store('ruangan/gambar', 'public'),
            'ukuran' => $request->ukuran,
            'kapasitas' => $request->kapasitas,
            'fasilitas' => $request->fasilitas,
            'peraturan' => $request->peraturan,
            'lokasi' => $request->lokasi,
            'alamat_ruangan' => $request->alamat_ruangan,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            // 'provinsi' => getProvinsiList(),
            // 'kabupaten' => getKabupatenList(),
            // 'kecamatan' => getKecamatanList(),
            'deskripsi' => $request->deskripsi,
            'foto' => $request->file('foto')->store('ruangan/gambar', 'public'),
		]);
        return redirect('/admin/ruangan')->with('sukses','Data berhasil disimpan!');
    }

    public function edit($id_ruangan)
    {
        $ruangan = \App\Ruangan::find($id_ruangan);
        $kategori = \App\Kategori::all();
        $pemilik = \App\Pemilik::all();
        return view ('ruangan.edit',compact('ruangan','kategori','pemilik'));
    }

    public function update(Request $request, $id_ruangan)
    {
        $ruangan = \App\Ruangan::find($id_ruangan);
        // //upload file update
        // $file = $request->file('foto');
		// $nama_file = time()."_".$file->getClientOriginalName();
      	// // fill with folder location
		// $tujuan_upload = 'ruangan';
        // $file->move($tujuan_upload,$nama_file);
        
        if ($request->layout != null) {
            $file = $request->file('layout')->store('ruangan/gambar', 'public');
        }else{
            $file = $ruangan->layout;
        }

        if ($request->foto != null) {
            $files = $request->file('foto')->store('ruangan/gambar', 'public');
        }else{
            $files = $ruangan->foto;
        }

        Ruangan::whereid_ruangan($id_ruangan)->update([
            'nama_ruangan' => $request->nama_ruangan,
            'kategori_id_kategori' => $request->kategori_id_kategori,
            'pemilik_id' => $request->pemilik_id,
            'harga' => $request->harga,
            'layout' => $file,
            'ukuran' => $request->ukuran,
            'kapasitas' => $request->kapasitas,
            'fasilitas' => $request->fasilitas,
            'peraturan' => $request->peraturan,
            'lokasi' => $request->lokasi,
            'alamat_ruangan' => $request->alamat_ruangan,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'deskripsi' => $request->deskripsi,
            'foto' => $files,
        ]);
        return redirect('/admin/ruangan')->with('sukses','Data berhasil diupdate!');
    }

    public function delete($id_ruangan)
    {
        $ruangan = \App\Ruangan::find($id_ruangan);
        $ruangan -> delete($ruangan);
        return redirect('/admin/ruangan')->with('sukses','Data berhasil dihapus!');
    }

}

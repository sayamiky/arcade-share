<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangan';
    protected $primaryKey = 'id_ruangan';
    protected $fillable = 
    ['nama_ruangan','kategori_id_kategori','pemilik_id',
    'harga','layout','ukuran','kapasitas','fasilitas','peraturan',
    'lokasi','alamat_ruangan','kecamatan','kabupaten','provinsi','deskripsi','foto'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    } 

    public function pemilik()
    {
        return $this->belongsTo(Pemilik::class);
    } 

    public function ulasan()
    {
        return $this->hasMany(Ulasan::class);
    }
}

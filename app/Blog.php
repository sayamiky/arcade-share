<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use \Conner\Tagging\Taggable;

    protected $table = 'blog';
    protected $primaryKey = 'id';
    protected $fillable = ['judul','penulis','kategori','lokasi','deskripsi','gambar','nama_file']; 
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolio';
    protected $primaryKey = 'id';
    protected $fillable = ['judul','kategori','gambar_1','gambar_2','link'];

}

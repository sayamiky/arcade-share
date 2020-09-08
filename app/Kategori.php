<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $fillable = ['nama_kategori','desc_kategori']; 

    public function ruangan()
    {
        return $this->hasMany(Ruangan::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    protected $table = 'owners';
    protected $primaryKey = 'id';
    protected $fillable = ['name','phone','address','email','password'];

    public function ruangan()
    {
        return $this->hasMany(Ruangan::class);
    }
}
 
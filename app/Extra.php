<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    protected $table = 'extra';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_extra','harga','desc_extra','foto'];
}

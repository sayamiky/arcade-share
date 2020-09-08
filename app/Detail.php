<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'detail';
    protected $primaryKey = 'id_detail';
    protected $fillable = ['id_transaksi','user_id','extra_id','jumlah','total'];


    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }

}
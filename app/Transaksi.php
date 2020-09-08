<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $fillable = ['tgl_transaksi','user_id','nama','email','tlp','alamat',
    'tgl_reservasi','tgl_selesai','id_ruangan','fasilitas_tambahan','total_bayar',
    'metode_bayar','status_reservasi','status_bayar'];
    // protected $dates = ['tgl_reservasi','tgl_selesai'];

    public function getProfile()
    {
        if (!$this->photo) {
            return asset('userprofile/default.png');
        }

        return asset('userprofile/'.$this->photo);
    }

    public function detail()
    {
        return $this->hasMany(Detail::class);
    }

    /**
     * Set status to Pending
     *
     * @return void
     */
    public function setPending()
    {
        $this->attributes['status_bayar'] = 'pending';
        self::save();
    }
 
    /**
     * Set status to Success
     *
     * @return void
     */
    public function setSuccess()
    {
        $this->attributes['status_bayar'] = 'success';
        self::save();
    }
 
    /**
     * Set status to Failed
     *
     * @return void
     */
    public function setFailed()
    {
        $this->attributes['status_bayar'] = 'failed';
        self::save();
    }
 
    /**
     * Set status to Expired
     *
     * @return void
     */
    public function setExpired()
    {
        $this->attributes['status_bayar'] = 'expired';
        self::save();
    }
}

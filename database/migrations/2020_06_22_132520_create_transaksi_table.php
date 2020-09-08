<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            $table->dateTime('tgl_transaksi');
            $table->integer('user_id');
            $table->string('nama');
            $table->string('email');
            $table->string('tlp');
            $table->text('alamat');
            $table->dateTime('tgl_reservasi');
            $table->dateTime('tgl_selesai');
            $table->string('id_ruangan');
            $table->string('fasilitas_tambahan')->nullable();
            $table->double('total_bayar');
            $table->string('metode_bayar');
            $table->string('status_reservasi');
            $table->string('status_bayar')->default(0);
            $table->string('snap_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}

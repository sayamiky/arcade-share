<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvinsiKabupatenKecamatanTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinsi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->timestamps();
        });
        Schema::create('kabupaten', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('provinsi_id');            
            $table->timestamps();
        });
        Schema::create('kecamatan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('kabupaten_id');            
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
        // Schema::dropIfExists('provinsi_kabupaten_kecamatan_tables');
        Schema::drop('provinsi');
        Schema::drop('kabupaten');
        Schema::drop('kecamatan');
    }
}

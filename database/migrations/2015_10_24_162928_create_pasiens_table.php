<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('penduduk_id');
            $table->date('tanggal_masuk');
            $table->date('tanggal_pengkajian');
            $table->unsignedInteger('ortu_id');
            $table->unsignedInteger('instansi_id');
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
        Schema::drop('pasien');
    }
}

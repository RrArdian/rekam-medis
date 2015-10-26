<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('nama_lengkap');
            $table->string('nik', 16);
            $table->string('no_rekam_medis', 20);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama', 20);
            $table->string('jenis_kelamin', 10);
            $table->string('status', 20);
            $table->string('pendidikan', 10);
            $table->string('pekerjaan', 25);
            $table->string('suku_bangsa', 32);
            $table->string('alamat', 100);
            $table->string('kelurahan', 50);
            $table->unsignedInteger('kecamatan_id');
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
        Schema::drop('penduduk');
    }
}

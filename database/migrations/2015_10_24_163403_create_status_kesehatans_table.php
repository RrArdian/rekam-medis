<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusKesehatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_kesehatan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sekarang_id');
            $table->unsignedInteger('terdahulu_id');
            $table->string('riwayat_penyakit_keluarga');
            $table->string('diagnosa_medis_terapi');
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
        Schema::drop('status_kesehatan');
    }
}

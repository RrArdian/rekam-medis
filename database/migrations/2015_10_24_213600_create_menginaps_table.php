<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenginapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menginap', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pasien_id');
            $table->unsignedInteger('bangsal_id');
            $table->unsignedInteger('ruang_id');
            $table->enum('is_pindahan', ['ya', 'tidak'])->default('tidak');
            $table->unsignedInteger('pindahan_id');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
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
        Schema::drop('menginap');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolaAktivitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pola_aktivitas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kemampuan_perawatan', 1);
            $table->string('makan_minum', 1);
            $table->string('mandi', 1);
            $table->string('toilet', 1);
            $table->string('berpakaian', 1);
            $table->string('berpindah', 1);
            $table->string('latihan', 1);
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
        Schema::drop('pola_aktivitas');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusSekarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_sekarang', function (Blueprint $table) {
            $table->increments('id');
            $table->text('keluhan_utama');
            $table->text('alasan');
            $table->text('upaya');
            $table->text('tekanan_darah');
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
        Schema::drop('status_sekarang');
    }
}

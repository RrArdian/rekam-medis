<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstansisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instansi', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('kategori_id');
            $table->string('slug');
            $table->string('nama');
            $table->unsignedInteger('kecamatan_id');
            $table->double('latitude', 15, 13);
            $table->double('longitude', 14, 11);
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
        Schema::drop('instansi');
    }
}

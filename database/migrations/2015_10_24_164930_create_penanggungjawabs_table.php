<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenanggungjawabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penanggungjawab', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('penduduk_id');
            $table->unsignedInteger('pasien_id');
            $table->string('hubungan', 100);
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
        Schema::drop('penanggungjawab');
    }
}

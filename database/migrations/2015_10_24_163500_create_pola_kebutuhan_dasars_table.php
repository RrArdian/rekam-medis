<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolaKebutuhanDasarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pola_kebutuhan_dasar', function (Blueprint $table) {
            $table->increments('id');
            $table->text('pola_persepsi');
            $table->text('pola_nutrisi');
            $table->text('pola_eliminasi');
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
        Schema::drop('pola_kebutuhan_dasar');
    }
}

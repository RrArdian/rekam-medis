<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengukuranVitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengukuran_vital', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pasien_id');
            $table->decimal('suhu_tubuh', 2, 2);
            $table->decimal('denyut_nadi', 3, 2);
            $table->string('respirasi');
            $table->string('tekanan_darah');
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
        Schema::drop('pengukuran_vital');
    }
}

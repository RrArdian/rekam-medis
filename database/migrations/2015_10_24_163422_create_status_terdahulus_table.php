<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusTerdahulusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_terdahulu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('penyakit');
            $table->string('pernah_dirawat');
            $table->unsignedInteger('instansi_id');
            $table->string('alergi');
            $table->string('kebiasaan');
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
        Schema::drop('status_terdahulu');
    }
}

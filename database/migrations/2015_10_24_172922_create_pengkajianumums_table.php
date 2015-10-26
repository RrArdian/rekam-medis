<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengkajianumumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengkajianumum', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pasien_id');
            $table->unsignedInteger('penanggungjawab_id');
            $table->unsignedInteger('status_kesehatan_id');
            $table->unsignedInteger('pola_kebutuhan_dasar_id');
            $table->unsignedInteger('pola_aktivitas_id');
            $table->text('pola_persepsi');
            $table->text('pola_istirahat');
            $table->text('pola_peran_hubungan');
            $table->text('pola_seksual_reproduksi');
            $table->text('pola_stress_koping');
            $table->text('pola_nilai_kepercayaan');
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
        Schema::drop('pengkajianumum');
    }
}

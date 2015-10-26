<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengkajianJatuhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengkajian_jatuh', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pasien_id');
            $table->enum('riwayat_jatuh', ['ya', 'tidak']);
            $table->decimal('skor_riwayat', 2, 2);
            $table->string('alat_bantu');
            $table->decimal('skor_alat', 2, 2);
            $table->enum('terapi', ['ya', 'tidak']);
            $table->decimal('skor_terapi', 2, 2);
            $table->string('gaya_berjalan');
            $table->decimal('skor_gaya', 2, 2);
            $table->enum('status_mental', ['ya', 'tidak']);
            $table->decimal('skor_mental', 2, 2);
            $table->decimal('skor_total', 3, 2);
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
        Schema::drop('pengkajian_jatuh');
    }
}

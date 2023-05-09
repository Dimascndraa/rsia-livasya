<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_instansi');
            $table->string('image')->nullable();
            $table->string('title');
            $table->string('descript');
            $table->string('sejarah');
            $table->text('facebook');
            $table->text('instagram');
            $table->text('twitter');
            $table->text('youtube');
            $table->string('no_telp1');
            $table->string('no_telp2');
            $table->string('gmail');
            $table->string('alamat');
            $table->integer('jml_dokter');
            $table->integer('jml_pasien_puas');
            $table->integer('jml_fasilitas_kamar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dokter_id')->references('id')->on('dokters');
            $table->string('senin')->nullable();
            $table->string('selasa')->nullable();
            $table->string('rabu')->nullable();
            $table->string('kamis')->nullable();
            $table->string('jumat')->nullable();
            $table->string('sabtu')->nullable();
            $table->string('minggu')->nullable();
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
        Schema::dropIfExists('pagis');
    }
}

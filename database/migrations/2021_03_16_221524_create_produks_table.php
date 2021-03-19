<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('foto');
            $table->string('dokumen_standar_mutu');
            $table->string('dokumen_ijin');
            $table->string('deskripsi');
            $table->biginteger('standar_mutu_id')->unsigned()->nullable();
            $table->biginteger('ijin_id')->unsigned()->nullable();
            $table->foreign('standar_mutu_id')->references('id')->on('standar_mutus')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ijin_id')->references('id')->on('ijins')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('produks');
    }
}

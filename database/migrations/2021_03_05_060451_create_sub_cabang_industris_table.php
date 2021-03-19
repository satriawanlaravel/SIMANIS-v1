<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCabangIndustrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_cabang_industris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sub_cabangindustri');
            $table->biginteger('cabangindustri_id')->unsigned()->nullable();
            $table->foreign('cabangindustri_id')->references('id')->on('cabang_industris')->onDelete('cascade'); 
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
        Schema::dropIfExists('sub_cabang_industris');
    }
}

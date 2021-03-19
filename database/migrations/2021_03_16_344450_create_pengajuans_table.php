<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->biginteger('user_id')->unsigned()->nullable();
            $table->biginteger('kur_id')->unsigned()->nullable();
            $table->string('jumlah_pengajuan')->nullable();
            $table->string('jangka_waktu');
            $table->string('bank_id');
            $table->string('jenis_usaha');
            $table->string('ijin_usaha');
            $table->string('npwp');
            $table->string('foto_tempat_usaha');
            $table->string('foto_ktp');
            $table->string('status_verifikasi')->default('Belum diverifikasi'); // belum diverifikasi, sudah diverifikasi
            $table->text('catatan_verifikasi')->nullable();
            $table->date('tanggal_verifikasi')->nullable();
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
        Schema::dropIfExists('pengajuans');
    }
}

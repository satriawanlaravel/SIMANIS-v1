<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('NIK');
            $table->string('nama_pemilik');
            $table->string('nama_perusahaan');
            $table->enum('jk', ['L', 'P']);
            $table->date('tanggal_lahir');
            $table->string('telepon');  
            $table->decimal('lat', 10, 6)->nullable();
            $table->decimal('lng', 10, 6)->nullable();        
            $table->string('alamat');            
            $table->enum('tenaga_kerja_tetap', ['L', 'P']);
            $table->enum('tenaga_kerja_tak_tetap', ['L', 'P']);            
            $table->enum('investasi',['Gedung','Tanah','Bangunan','Tidak Ada']);
            $table->string('kapasitas_produksi');
            $table->string('omset');
            $table->string('nilai_BB_BP');
            $table->enum('pelatihan',['Desa','Dinas','Lembaga','Lainnya']);
            $table->enum('kategori_IKM',['Formal','Non Formal']);
            $table->string('bantuan');
            $table->date('tahun_berdiri');            
            $table->enum('wilayah_pemasaran',['Lokal','Nasional','Luar Negeri','Lainnya']);
            $table->string('email')->unique();            
            $table->string('avatar');
            $table->string('password');            
            $table->char('provinsi_id', 2)->nullable();
            $table->char('kabupaten_id', 4)->nullable();
            $table->char('kecamatan_id', 7)->nullable();
            $table->char('kelurahan_id', 10)->nullable();
            $table->biginteger('cabangindustri_id')->unsigned()->nullable();
            $table->biginteger('subcabangindustri_id')->unsigned()->nullable();
            $table->biginteger('produk_id')->unsigned()->nullable();            
            $table->biginteger('role_id')->unsigned()->nullable();
            
            $table->foreign('provinsi_id')->references('id')->on('provinsis')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kabupaten_id')->references('id')->on('kabupatens')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kecamatan_id')->references('id')->on('kecamatans')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kelurahan_id')->references('id')->on('kelurahans')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('cabangindustri_id')->references('id')->on('cabang_industris')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('subcabangindustri_id')->references('id')->on('sub_cabang_industris')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('produk_id')->references('id')->on('produks')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

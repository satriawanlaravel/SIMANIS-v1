<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KelurahanDesa extends Model
{
    protected $table ='kelurahans';
    protected $fillable = ['nama_kelurahan_desa','kecamatan_id'];

    public function kecamatan(){
        return $this->hasMany('App\Kecamatan', 'kecamatan_id', 'id');
    }
}

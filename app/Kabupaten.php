<?php

namespace App;
use App\Kabupaten;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table ='kabupatens';
    protected $fillable = ['nama_kabupten','provinsi_id'];

    public function provinsi(){
        return $this->hasMany('App\Provinsi', 'provinsi_id', 'id');
    }

    public function kecamatan(){
        return $this->belongsTo('App\Kecamatan', 'id');
    }
}

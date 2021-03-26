<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table ='kecamatans';
    protected $fillable = ['nama_kecamtan','kebupaten_id'];

    public function kabupaten(){
        return $this->hasMany('App\Kabupaten', 'kebupaten_id', 'id');
    }

    public function kelurahan(){
        return $this->belongsTo('App\Kelurahan', 'id');
    }
}

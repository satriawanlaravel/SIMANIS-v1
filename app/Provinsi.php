<?php

namespace App;
use App\Provinsi;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'provinsis';
    protected $fillable = ['nama_provinsi'];


    public function kabupaten(){
        return $this->belongsTo('App\Kabupaten', 'id');
    }
}

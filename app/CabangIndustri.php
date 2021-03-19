<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CabangIndustri extends Model
{
    protected $table = 'cabang_industris';
    protected $fillable = ['nama_cabangindustri'];

    public function sub_cabangindustri(){
        return $this->belongsTo('App\SubCabangIndustri', 'id');
    }
    
}

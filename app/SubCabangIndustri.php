<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCabangIndustri extends Model
{
    protected $table = 'sub_cabang_industris';
    protected $fillable = ['nama_sub_cabangindustri','cabangindustri_id'];

    public function cabangindustri(){
        return $this->hasMany('App\CabangIndustri', 'cabangindutri_id', 'id');
    }
    
}

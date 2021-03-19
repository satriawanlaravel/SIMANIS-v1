<?php

namespace App\Http\Controllers;
use App\CabangIndustri;
use App\SubCabangIndustri;
use DB;
use Illuminate\Http\Request;

class CabangindustriController extends Controller
{
    public function index()
    {
        // $set = Request::get('id');
        // $cabangindustri = CabangIndistri::where('id', $set)->get();
		// $subcabangindustri = SubCabangIndustri::where('id', $set)->get();
        // dd($cabangindustri);

        $getcabang = CabangIndustri::all(); 
        $getsubcabang = SubCabangIndustri::all(); 
        
        return view('cabangindustri.index',  compact('getcabang','getsubcabang'));
    }

    

    public function get_subcategoriindustri()
    {
        $set = Input::get('id');
        $cabangindustri = CabangIndistri::where('id', $set)->get();
		$subcabangindustri = SubCabangIndustri::where('id', $set)->get();
        dd($cabangindustri);
        $getsubcabangindustri = DB::table('sub_cabang_industris')
        ->join('cabang_industris', 'sub_cabang_industris.cabangindustri_id', '=', 'cabang_industris.id')
        ->get();
              
       }

}

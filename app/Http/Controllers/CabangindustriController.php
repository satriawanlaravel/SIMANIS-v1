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
        $getcabang = CabangIndustri::all();
        return view('cabangindustri.index',  compact('getcabang'));
    }

    public function get_subcategoriindustri(Request $request)
    {
		$subcabangindustri = SubCabangIndustri::where('cabangindustri_id', $request->id)->pluck('nama_sub_cabangindustri', 'id');
        return response()->json($subcabangindustri);
    }

}

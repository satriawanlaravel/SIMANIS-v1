<?php

namespace App\Http\Controllers;
use App\Provinsi;
use App\Kabupaten;
use App\Kecamatan;
use App\KelurahanDesa;
use View;

use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index()
    {
        $getprovinsi = Provinsi::all();
        return view::make('provinsi.index', compact('getprovinsi'));
    }

    public function get_kabupaten(Request $request)
    {
		$getkabupaten = Kabupaten::where('provinsi_id', $request->id)->pluck('nama_kabupaten', 'id');		     
        return response()->json($getkabupaten);
    }
    public function get_kecamatan(Request $request)
    {
		$getkecamatan = Kecamatan::where('kebupaten_id', $request->id)->pluck('nama_kecamatan', 'id');        
        return response()->json($getkecamatan);
    }
    public function get_kelurahandesa(Request $request)
    {
		$getkelurahandesa = KelurahanDesa::where('kecamatan_id', $request->id)->pluck('nama_kelurahan_desa', 'id');        
        return response()->json($getkelurahandesa);
    }

}

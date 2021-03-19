<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\SubCabangIndustri;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/aku', function () {
    return view('welcome');
});

Route::get('/cabangindustri','CabangindustriController@index');
Route::post('mhs/fatch','CabangindustriController@fatch')->name('mhs.fatch');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
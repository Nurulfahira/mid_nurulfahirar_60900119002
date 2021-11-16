<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\BiodataController;

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

Route::get('/daftarbuku', 'Perpustakaan@index');
Route::get('/daftarbuku/{tahun}', 'Perpustakaan@show');
Route::get('/daftarbuku/{author}', 'Perpustakaan@show');
Route::get('/daftarbuku/{isbn}', 'Perpustakaan@show');
Route::get('/buku/{judul}', 'BukuTeknologi@show');


Route::get('/prak3/create', 'Praktikum3@create');
Route::post('/prak3', 'Praktikum3@store');

Route::get('/biodata', [BiodataController::class, 'biodata'])->name('my.biodata');
Route:: post('/biodata', [BiodataController::class,'data']);












Route::get('/buku/create', 'BukuController@create');

Route::post('/buku', 'BukuController@store');

Route::get('/buku', 'BukuController@index');

Route::get('/buku/{id}', 'BukuController@show');

Route::get('/buku/{isbn}', 'BukuController@show');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/route1', function () {
    return view('biodata');
});

Route::get('/route2', function () {
   return 'Selamat Datang Laporan Praktikum 1';
});

// Route::get('/daftarbuku', function () {
//     return view('daftarbuku');
// });


// Route::get('/buku', 'PatmayantiKartini@index');

// Route::get('/buku/{isbn}', 'PatmayantiKartini@show');
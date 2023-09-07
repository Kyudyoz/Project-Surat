<?php

use App\Http\Controllers\PendudukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/panduan', function () {
    return view('panduan');
});
Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/sktm', function () {
    return view('surat.sktm');
});
Route::get('/skd', function () {
    return view('surat.skd');
});
Route::get('/sku', function () {
    return view('surat.sku');
});
Route::get('/skj', function () {
    return view('surat.skj');
});
Route::get('/skk', function () {
    return view('surat.skk');
});
Route::get('/skkr', function () {
    return view('surat.skkr');
});
Route::get('/sik', function () {
    return view('surat.sik');
});

Route::get('/cetak_sktm/{nik}', [PendudukController::class, 'cetak_sktm']);
Route::get('/cetak_skd/{nik}/{tinggal}&{keperluan}', [PendudukController::class, 'cetak_skd']);
Route::get('/cetak_skj/{nik}/{cerai}&{pasangan}', [PendudukController::class, 'cetak_skj']);
Route::get('/cetak_skkr/{nik}/{alamat_rumah}', [PendudukController::class, 'cetak_skkr']);
Route::get('/cetak_sku/{nik}/{keperluan}/{usaha}&{nama_usaha}', [PendudukController::class, 'cetak_sku']);
Route::get('/cetak_skk/{nik}/{hari}&{tanggal}/{jam}&{tempat}/{dikarenakan}&{dimakamkan}', [PendudukController::class, 'cetak_skk']);

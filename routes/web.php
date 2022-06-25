<?php

use App\Http\Controllers\PendudukController;
use Illuminate\Support\Facades\Route;
use Novay\WordTemplate\WordTemplate;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

Route::resource('penduduk', PendudukController::class);

// DASHBOARD
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

// SURAT KETERANGAN USAHA
Route::get('/surat-keterangan-usaha', [App\Http\Controllers\SuratKeluarController::class, 'create_sk_usaha'])->name('surat-keterangan-usaha.create');
Route::post('/surat-keterangan-usaha/download', [App\Http\Controllers\SuratKeluarController::class, 'download_sk_usaha'])->name('surat-keterangan-usaha.download');
// SURAT KETERANGAN KEMATIAN
Route::get('/surat-keterangan-kematian', [App\Http\Controllers\SuratKeluarController::class, 'create_sk_kematian'])->name('surat-keterangan-kematian.create');
Route::post('/surat-keterangan-kematian/download', [App\Http\Controllers\SuratKeluarController::class, 'download_sk_kematian'])->name('surat-keterangan-kematian.download'); 
// SURAT KETERANGAN TIDAK MAMPU
Route::get('/surat-keterangan-tidak-mampu', [App\Http\Controllers\SuratKeluarController::class, 'create_sk_tidak_mampu'])->name('surat-keterangan-tidak-mampu.create');
Route::post('/surat-keterangan-tidak-mampu/download', [App\Http\Controllers\SuratKeluarController::class, 'download_sk_tidak_mampu'])->name('surat-keterangan-tidak-mampu.download');
// SURAT KETERANGAN HILANG
Route::get('/surat-keterangan-hilang', [App\Http\Controllers\SuratKeluarController::class, 'create_sk_hilang'])->name('surat-keterangan-hilang.create');
Route::post('/surat-keterangan-hilang/download', [App\Http\Controllers\SuratKeluarController::class, 'download_sk_hilang'])->name('surat-keterangan-hilang.download');
// SURAT KETERANGAN DOMISILI
Route::get('/surat-keterangan-domisili', [App\Http\Controllers\SuratKeluarController::class, 'create_sk_domisili'])->name('surat-keterangan-domisili.create');
Route::post('/surat-keterangan-domisili/download', [App\Http\Controllers\SuratKeluarController::class, 'download_sk_domisili'])->name('surat-keterangan-domisili.download');
// SURAT KETERANGAN BELUM MENIKAH
Route::get('/surat-keterangan-belum-menikah', [App\Http\Controllers\SuratKeluarController::class, 'create_sk_belum_menikah'])->name('surat-keterangan-belum-menikah.create');
Route::post('/surat-keterangan-belum-menikah/download', [App\Http\Controllers\SuratKeluarController::class, 'download_sk_belum_menikah'])->name('surat-keterangan-belum-menikah.download');
// SURAT KETERANGAN AHLI WARIS
Route::get('/surat-keterangan-ahli-waris', [App\Http\Controllers\SuratKeluarController::class, 'create_sk_ahli_waris'])->name('surat-keterangan-ahli-waris.create');
Route::post('/surat-keterangan-ahli-waris/download', [App\Http\Controllers\SuratKeluarController::class, 'download_sk_ahli_waris'])->name('surat-keterangan-ahli-waris.download');


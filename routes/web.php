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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('penduduk', PendudukController::class);

// Route::get('tes', function () {

// 	$file = public_path('kop-surat.rtf');
	
// 	$array = array(
// 		'[nomor_surat]' => '015/BT/SK/V/2017',
// 		'[nama]' => 'Melani Malik',
// 		'[nik]' => '6472065508XXXXX',
//         '[jenis_kelamin]' => 'Laki-laki',
//         '[ttl]' => 'Lambandia, 16 juni 2020',
//         '[negara]' => 'Indonesia',
//         '[agama]' => 'Islam',
//         '[status]' => 'Menikah',
//         '[pekerjaan]' => 'PNS',
// 		'[alamat]' => 'Jl. Manunggal Gg. 8 Loa Bakung, Samarinda',
		
// 		'[kota]' => 'Lambandia',
//         '[tanggal]' => date('d F Y'),
//         '[jabatan]' => 'Kepala Desa Lambandia',
// 		'[nama_ttd]' => 'Noviyanto Rahmadi'
// 	);

// 	$nama_file = 'surat-keterangan-usaha.doc';
//     $download = new WordTemplate();

// 	return $download->export($file, $array, $nama_file);

// });

// DASHBOARD
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

// SURAT KETERANGAN USAHA
Route::get('/surat-keterangan-usaha', [App\Http\Controllers\SuratUsahaController::class, 'create'])->name('surat-keterangan-usaha.create');
Route::post('/surat-keterangan-usaha/download', [App\Http\Controllers\SuratUsahaController::class, 'download'])->name('surat-keterangan-usaha.download');
// 

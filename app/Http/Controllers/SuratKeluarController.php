<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Novay\WordTemplate\WordTemplate;

class SuratKeluarController extends Controller
{
    public function create_sk_usaha(){
        return view('surat-keluar.sk-usaha.create');
    }

    public function create_sk_kematian(){
        return view('surat-keluar.sk-kematian.create');
    }

    public function create_sk_hilang(){
        return view('surat-keluar.sk-hilang.create');
    }

    public function create_sk_domisili(){
        return view('surat-keluar.sk-domisili.create');
    }

    public function create_sk_belum_menikah(){
        return view('surat-keluar.sk-belum-menikah.create');
    }

    public function create_sk_ahli_waris(){
        return view('surat-keluar.sk-ahli-waris.create');
    }

    public function create_sk_tidak_mampu(){
        return view('surat-keluar.sk-tidak-mampu.create');
    }

    public function download_sk_usaha(Request $request){   
        $file = public_path('sk-usaha.rtf');

        $array = array(
            '[nomor_surat]' => $request['nomor_surat'],
            '[nama]' => ucwords($request['nama']),
            '[nik]' => $request['nik'],
            '[jenis_kelamin]' => $request['jenis_kelamin'],
            '[ttl]' => ucwords($request['ttl']),
            '[negara]' => ucwords($request['negara']),
            '[agama]' => ucwords($request['agama']),
            '[status]' => ucwords($request['status']),
            '[pekerjaan]' => ucwords($request['pekerjaan']),
            '[alamat]' => ucwords($request['alamat']),
            '[bidang_usaha]' => ucwords($request['bidang_usaha']),
            '[tanggal]' => ucwords($request['tanggal'])
        );

        $nama_file = 'surat-keterangan-usaha.doc';
        $download = new WordTemplate();

        $download->export($file, $array, $nama_file);

        return redirect()->route('surat-keluar.sk-usaha.create');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Novay\WordTemplate\WordTemplate;

class SuratUsahaController extends Controller
{
    public function create()
    {
        return view('surat-keterangan-usaha.create');
    }

    public function download(Request $request)
    {   
        $file = public_path('sk-usaha.rtf');

        $array = array(
            '[nomor_surat]' => $request['nomor_surat'],
            '[nama]' => $request['nama'],
            '[nik]' => $request['nik'],
            '[jenis_kelamin]' => $request['jenis_kelamin'],
            '[ttl]' => $request['ttl'],
            '[negara]' => $request['negara'],
            '[agama]' => $request['agama'],
            '[status]' => $request['status'],
            '[pekerjaan]' => $request['pekerjaan'],
            '[alamat]' => $request['alamat'],
            '[bidang_usaha]' => $request['bidang_usaha'],
            '[tanggal]' => $request['tanggal']
        );

        $nama_file = 'surat-keterangan-usaha.doc';
        $download = new WordTemplate();

        $download->export($file, $array, $nama_file);

        return redirect()->route('surat-keterangan-usaha.create');
    }
}

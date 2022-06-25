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

    public function download_sk_belum_menikah(Request $request){   
        $file = public_path('sk-belum-menikah.rtf');

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
            '[tanggal]' => ucwords($request['tanggal'])
        );

        $nama_file = 'surat-keterangan-belum-menikah.doc';
        $download = new WordTemplate();

        $download->export($file, $array, $nama_file);

        return redirect()->route('surat-keluar.sk-belum-menikah.create');
    }

    public function download_sk_domisili(Request $request){   
        $file = public_path('sk-domisili.rtf');

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
            '[tahun]' => ucwords($request['tahun']),
            '[tanggal]' => ucwords($request['tanggal'])
        );

        $nama_file = 'surat-keterangan-domisili.doc';
        $download = new WordTemplate();

        $download->export($file, $array, $nama_file);

        return redirect()->route('surat-keluar.sk-domisili.create');
    }

    public function download_sk_tidak_mampu(Request $request){   
        $file = public_path('sk-tidak-mampu.rtf');
        $array = array(
            '[nomor_surat]' => $request['nomor_surat'],
            '[nama]' => ucwords($request['nama']),
            '[jenis_kelamin]' => $request['jenis_kelamin'],
            '[ttl]' => ucwords($request['ttl']),
            '[agama]' => ucwords($request['agama']),
            '[pekerjaan]' => ucwords($request['pekerjaan']),
            '[nama_ayah]' => ucwords($request['nama_ayah']),
            '[ttl_ayah]' => ucwords($request['ttl_ayah']),
            '[agama_ayah]' => ucwords($request['agama_ayah']),
            '[pekerjaan_ayah]' => ucwords($request['pekerjaan_ayah']),
            '[alamat]' => ucwords($request['alamat']),
            '[tanggal]' => ucwords($request['tanggal'])
        );

        $nama_file = 'surat-keterangan-tidak-mampu.doc';
        $download = new WordTemplate();

        $download->export($file, $array, $nama_file);

        return redirect()->route('surat-keluar.sk-tidak-mampu.create');
    }

    public function download_sk_hilang(Request $request){   
        $file = public_path('sk-hilang.rtf');
        // dd($request);
        $array = array(
            '[nomor_surat]' => $request['nomor_surat'],
            '[nama]' => ucwords($request['nama']),
            '[nik]' => $request['nik'],
            '[ttl]' => ucwords($request['ttl']),
            '[pekerjaan]' => ucwords($request['pekerjaan']),
            '[alamat]' => ucwords($request['alamat']),
            '[dokumen]' => ucwords($request['dokumen']),
            '[nomor_dokumen]' => ucwords($request['nomor_dokumen']),
            '[tanggal_hilang]' => ucwords($request['tanggal_hilang']),
            '[tempat_hilang]' => ucwords($request['tempat_hilang']),
            '[tahun]' => ucwords($request['tahun']),
            '[tanggal]' => ucwords($request['tanggal'])
        );

        $nama_file = 'surat-keterangan-hilang.doc';
        $download = new WordTemplate();

        $download->export($file, $array, $nama_file);

        return redirect()->route('surat-keluar.sk-hilang.create');
    }

    public function download_sk_kematian(Request $request){   
        $file = public_path('sk-kematian.rtf');
        // dd($request);

        $array = array(
            '[nomor_surat]' => $request['nomor_surat'],
            '[nama]' => ucwords($request['nama']),
            '[ttl]' => ucwords($request['ttl']),
            '[negara]' => ucwords($request['negara']),
            '[agama]' => ucwords($request['agama']),
            '[pekerjaan]' => ucwords($request['pekerjaan']),
            '[alamat]' => ucwords($request['alamat']),
            '[tanggal_meninggal]' => ucwords($request['tanggal_meninggal']),
            '[tempat_meninggal]' => ucwords($request['tempat_meninggal']),
            '[penyebab_meninggal]' => ucwords($request['penyebab_meninggal']),
            '[tanggal_dikebumikan]' => ucwords($request['tanggal_dikebumikan']),
            '[tempat_dikebumikan]' => ucwords($request['tempat_dikebumikan']),
            '[tanggal]' => ucwords($request['tanggal'])
        );

        $nama_file = 'surat-keterangan-kematian.doc';
        $download = new WordTemplate();

        $download->export($file, $array, $nama_file);

        return redirect()->route('surat-keluar.sk-kematian.create');
    }
}

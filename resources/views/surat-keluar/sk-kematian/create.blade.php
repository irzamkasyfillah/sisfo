@extends('layout.layout')
  
@section('content')
<!-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>Add New Student</h2>
        </div>
        <div>
            <a class="btn btn-primary mb-1" href="{{ route('penduduk.index') }}"> Back</a>
        </div>
    </div>
</div> -->
<h2>SURAT KETERANGAN KEMATIAN</h2>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('surat-keterangan-kematian.download') }}" method="POST">
    @csrf
  
     <div class="row mt-2">
        <div class="col-xs-16 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Surat</strong>
                <input type="text" name="nomor_surat" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-16 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama</strong>
                <input type="text" name="nama" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat/Tanggal Lahir</strong>
                <input type="text" class="form-control" name="ttl" placeholder=""></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kewarganegaraan</strong>
                <input class="form-control" name="negara" placeholder=""></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Agama</strong>
                <input class="form-control" name="agama" placeholder=""></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pekerjaan Sebelumnya</strong>
                <input class="form-control" name="pekerjaan" placeholder=""></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat</strong>
                <input class="form-control" name="alamat" placeholder=""></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Kematian</strong>
                <input class="form-control" name="tanggal_meninggal" placeholder=""></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat Kematian</strong>
                <input type="text" class="form-control" name="tempat_meninggal" placeholder="contoh : Rumah"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penyabab Kematian</strong>
                <input class="form-control" name="penyebab_meninggal" placeholder="contoh : penyakit komplikasi"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal dikebumikan</strong>
                <input class="form-control" name="tanggal_dikebumikan" placeholder=""></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat dikebumikan</strong>
                <input class="form-control" name="tempat_dikebumikan" placeholder=""></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal TTD di Surat</strong>
                <input class="form-control" name="tanggal" placeholder=""></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success">Download (.doc)</button>
        </div>
    </div>
   
</form>
@endsection
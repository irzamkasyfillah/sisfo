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
<h2>SURAT KETERANGAN HILANG</h2>
   
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
   
<form action="{{ route('surat-keterangan-hilang.download') }}" method="POST">
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
                <strong>NIK</strong>
                <input class="form-control" name="nik" placeholder=""></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat/Tanggal Lahir</strong>
                <input class="form-control" name="ttl" placeholder=""></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pekerjaan</strong>
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
                <strong>Dokumen Hilang</strong>
                <input class="form-control" name="dokumen" placeholder=""></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Dokumen yang Hilang (Contoh No KTP)</strong>
                <input class="form-control" name="nomor_dokumen" placeholder=""></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Hilang</strong>
                <input class="form-control" name="tanggal_hilang" placeholder=""></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat Hilang</strong>
                <input class="form-control" name="tempat_hilang" placeholder=""></input>
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
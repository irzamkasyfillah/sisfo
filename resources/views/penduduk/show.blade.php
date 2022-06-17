@extends('layout.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2> Data Penduduk</h2>
            </div>
            <div>
                <a class="btn btn-primary mb-1" href="{{ route('penduduk.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama</strong>
                {{ $penduduk->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIK</strong>
                {{ $penduduk->nik }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No. KK</strong>
                {{ $penduduk->no_kk }}
            </div>
        </div>
    </div>
@endsection
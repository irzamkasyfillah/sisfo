@extends('layout.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Edit Data Penduduk</h2>
            </div>
            <div>
                <a class="btn btn-primary mb-1" href="{{ route('penduduk.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
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
  
    <form action="{{ route('penduduk.update',$penduduk->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama</strong>
                    <input type="text" name="nama" value="{{ $penduduk->nama }}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIK</strong>
                    <input class="form-control" name="nik" placeholder="" value="{{ $penduduk->nik }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No. KK</strong>
                    <input class="form-control" name="no_kk" placeholder="" value="{{ $penduduk->nik }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
   
    </form>
@endsection
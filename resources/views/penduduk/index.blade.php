@extends('layout.layout')
 
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="row">

                        @if ($message = Session::get('success'))
                            <div class="col-lg-12 alert alert-success">
                                <p style="color: white">{{ $message }}</p>
                            </div>
                        @endif

                        <div class="col-lg-12 margin-tb">
                            <div class="float-start">
                                <h2>Data Penduduk</h2>
                            </div>
                            <div class="float-end">
                                <a class="btn btn-success" href="{{ route('penduduk.create') }}"> Tambah Data Penduduk</a>
                            </div>
                        </div>
                    
                        

                        <div class="col-lg-12 margin-tb mt-1">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>No. KK</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($penduduks as $penduduk)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $penduduk->nama }}</td>
                                        <td>{{ $penduduk->nik }}</td>
                                        <td>{{ $penduduk->no_kk }}</td>
                                        <td>
                                            <form action="{{ route('penduduk.destroy',$penduduk->id) }}" method="POST">
                            
                                                <!-- <a class="btn btn-info" href="{{ route('penduduk.show',$penduduk->id) }}">Show</a> -->
                                
                                                <a class="btn btn-primary" href="{{ route('penduduk.edit',$penduduk->id) }}"><i class="ft-edit-2"></i></a>
                            
                                                @csrf
                                                @method('DELETE')
                                
                                                <button type="submit" class="btn btn-danger"><i class="ft-trash-2"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
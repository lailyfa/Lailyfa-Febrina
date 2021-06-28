@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   <div class="table-respomsive">
                    <table class="table table-bordered">   
                        <tr>
                            <th>NO</th>
                            <th>NAMA LENGKAP</th>
                            <th>NPM</th>
                            <th>TEMPAT, TANGGAL LAHIR</th>
                            <th>ALAMAT</th>
                            <th>TELEPON</th>
                            <th>JENIS KELAMIN</th>
                            <th>AKSI</th>
                        </tr>
                        
                       @foreach($mahasiswa as $mhs)
                       <tr>
                            <th>{{ $mhs->id }}</th>
                            <th>{{ $mhs->use->nama }}</th>
                            <th>{{ $mhs->npm }}</th>
                            <th>{{ $mhs->tempat_lahir.', '.$mhs->tgl_lahir }}</th>
                            <th>{{ $mhs-> telepon }}</th>
                            <th>{{ $mhs->alamat }}</th>
                            <th>{{ $mhs->gender }}</th>
                            <th></th>
                            <th>
                                <a href="a"class="btn btn-sm btn-warning">EDIT</a>
                                <a href="a"class="btn btn-sm btn-danger">HAPUS></a>
                            </th>
                       </tr>
                       @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

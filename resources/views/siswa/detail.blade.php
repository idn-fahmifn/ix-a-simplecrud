@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Nama Lengkap</th>
                                <td>{{$data->nama}}</td>
                            </tr>
                            <tr>
                                <th>Nomor Induk Siswa (NIS)</th>
                                <td>{{$data->nis}}</td>
                            </tr>
                            <tr>
                                <th>Nomor Induk Siswa Nasional (NISN)</th>
                                <td>{{$data->nisn}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>
                                    @if ($data->gender == 'laki-laki')
                                        <span class="bg-info p-1">Laki Laki</span>
                                    @else
                                        <span class="bg-danger p-1">Perempuan</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>Bogor</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
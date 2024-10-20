@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('siswa.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama" value="{{$data->nama}}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nomor Induk Siswa (NIS)</label>
                                    <input type="number" name="nis" value="{{$data->nis}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nomor Induk Siswa Nasional (NISN)</label>
                                    <input type="number" name="nisn" value="{{$data->nisn}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="gender" class="form-control" required>
                                        <option value="{{$data->gender}}">{{$data->gender}}</option>
                                        <option value="perempuan">Perempuan</option>
                                        <option value="laki-laki">Laki - Laki</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control">
                                        {{$data->alamat}}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
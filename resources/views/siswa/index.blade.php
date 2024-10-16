@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-4">
                    <form action="{{route('siswa.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nomor Induk Siswa (NIS)</label>
                                    <input type="number" name="nis" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nomor Induk Siswa Nasional (NISN)</label>
                                    <input type="number" name="nisn" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="gender" class="form-control" required>
                                        <option value="">Pilih jenis kelamin</option>
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
                                    <textarea name="alamat" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mt-2">
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <th>Nama</th>
                                <th>NISN</th>
                                <th>Gender</th>
                                <th>Pilihan</th>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->nism}}</td>
                                    <td>
                                        @if ($item->gender == 'laki-laki')
                                            <span class="text-primary">Laki Laki</span>
                                        @else
                                           <span class="text-danger">Perempuan</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="" method="post">
                                            @csrf
                                            <a href="" class="btn btn-info">Detail</a>
                                            <button type="submit" class="btn btn-danger">Hapus</button>
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
@endsection
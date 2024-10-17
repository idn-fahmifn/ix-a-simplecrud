@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card mt-3">
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
                                    <td>{{$item->nisn}}</td>
                                    <td>
                                        @if($item->gender == 'laki-laki')
                                        <span class="text-info">Laki - Laki</span>
                                        @else
                                        <span class="text-danger">Perempuan</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="#" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                            <a href="" class="btn btn-info">Detail</a>
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
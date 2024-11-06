@extends('layouts.template')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 col-lg-8">
            <div class="card shadow mb-3">
                <div class="card-body p-4 mb">
                    <h3 class="card-title text-center">Registerasi Tamu</h3>
                    <p class="text-muted mb-4 text-center">Masukan data diri lengkap dibawah</p>
                    <form action="" method="post">
                        <div class="row text-muted">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="nama_tamu" class="form-control mt-1 form-control-lg fw-light fs-6" placeholder="Nama Tamu">
                                </div>
                            </div>
                        </div>
                        <div class="row text-muted">
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <select name="level" id="" class="form-control form-control-lg fw-light fs-6 mt-3 text-muted">
                                        <option value="">Pilih Level</option>
                                        <option value="vip">Tamu VIP</option>
                                        <option value="wali_santri">Wali Santri</option>
                                        <option value="visitor">Visitor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <input type="text" name="tujuan" class="form-control form-control-lg fw-light fs-6 mt-3" placeholder="Tujuan">
                                </div>
                            </div>
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <input type="text" name="nama_instansi" class="form-control form-control-lg fw-light fs-6 mt-3" placeholder="Nama instansi">
                                </div>
                            </div>
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <input type="text" name="alamat" class="form-control form-control-lg fw-light fs-6 mt-3" placeholder="Alamat">
                                </div>
                            </div>
                            <div class="col-md-12 mt-5">
                                <div class="form-group">
                                    <button type="submit" class="btn form-control text-white" style="background-color: #0c007b;">Registerasi</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4">
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <div class="card bg-success bg-opacity-25">
                        <div class="card-body text-center">
                            <p class="h6">Total Tamu</p>
                            <p class="h1">30</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card bg-info bg-opacity-25">
                        <div class="card-body text-center">
                            <p class="h6">Tamu Hari ini</p>
                            <p class="h1">3</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
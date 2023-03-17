@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Sistem Informasi Desa') }}</div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">SURAT PENGANTAR</h5>
                        <p class="card-text">Halaman ini ditunjukan untuk menginput pengajuan berkaitan dengan surat-menyurat</p>
                        <a href="suket" class="btn btn-outline-info btn-lg">INPUT</a>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">INPUT DATA WARGA</h5>
                        <p class="card-text">Halaman ini ditunjukan untuk menginput data detail mengenai warga masyarakat yang ada pada wilayah bersangkutan</p>
                        <a href="data" class="btn btn-outline-info btn-lg">INPUT</a>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">MUSYAWARAH PERENCANAAN PEMBANGUNAN</h5>
                        <p class="card-text">Merupakan halaman khusus untuk perwakilan RW untuk memberikan usul untuk kepentingan Musyawarah Perencanaan Pembangunan</p>
                        <a href="musrenbang" class="btn btn-outline-info btn-lg">INPUT</a>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">DATABASE</h5>
                        <p class="card-text">Merupakan halaman untuk menyimpan semua data pelayanan informasi desa</p>
                        <a href="warga" class="btn btn-outline-info btn-lg">DATABASE</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
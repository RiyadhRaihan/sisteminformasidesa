@extends('layouts.master')

@section('content')

<section data-bs-version="5.1" class="form5 cid-t89cJ129HG" id="form5-u">
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Input Data Kependudukan</strong></h3>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="/warga/{{$warga->id}}" method="POST">
                    @method('put')
                    @csrf
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Nama Lengkap</legend>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$warga->nama}}"><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Nomor Induk Kependudukan</legend>
                            <div class="col-sm-10">
                                <input type="text" name="nik" class="form-control" placeholder="NIK" value="{{$warga->nik}}">
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Nomor Kartu Keluarga</legend>
                            <div class="col-sm-10">
                                <input type="text" name="nokk" class="form-control" placeholder="No KK" value="{{$warga->nokk}}"><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Alamat</legend>
                            <div class="col-sm-10">
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{$warga->alamat}}"><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Agama</legend>
                            <div class="col-sm-10">
                                <input type="text" name="agama" class="form-control" placeholder="Agama" value="{{$warga->agama}}"><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="L">
                                    <label class="form-check-label" for="gridRadios1">
                                        Laki Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="P">
                                    <label class="form-check-label" for="gridRadios1">
                                        Perempuan
                                    </label>
                                </div>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Status KTP</legend>
                            <div class="col-sm-10">
                                <input type="text" name="status_ktp" class="form-control" placeholder="Status KTP" value="{{$warga->status_ktp}}"><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Pekerjaan</legend>
                            <div class="col-sm-10">
                                <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" value="{{$warga->pekerjaan}}"><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Nomor BPJS</legend>
                            <div class="col-sm-10">
                                <input type="text" name="nobpjs" class="form-control" placeholder="No BPJS" value="{{$warga->nobpjs}}"><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Nomor NPWP</legend>
                            <div class="col-sm-10">
                                <input type="text" name="npwp" class="form-control" placeholder="NPWP" value="{{$warga->npwp}}"><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Status Menetap</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status_menetap" id="gridRadios1" value="Warga Tetap">
                                    <label class="form-check-label" for="gridRadios1">
                                        Warga Tetap
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status_menetap" id="gridRadios1" value="Warga Tidak Tetap">
                                    <label class="form-check-label" for="gridRadios1">
                                        Warga Tidak Tetap
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status_menetap" id="gridRadios1" value="Kontrak">
                                    <label class="form-check-label" for="gridRadios1">
                                        Kontrak
                                    </label>
                                </div>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Status Perkawinan</legend>
                            <div class="col-sm-10">
                                <input type="text" name="status_perkawinan" class="form-control" placeholder="Status Perkawinan" value="{{$warga->status_perkawinan}}"><br>
                    </fieldset>
                    <input type="submit" class="btn btn-info" name="submit" value="save">
                </form>
            </div>
        </div>
        </fieldset>
    </div>
    </form>
</section>
<script src="{{ asset('style/assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('style/assets/smoothscroll/smooth-scroll.js') }}"></script>
<script src="{{ asset('style/assets/ytplayer/index.js') }}"></script>
<script src="{{ asset('style/assets/dropdown/js/navbar-dropdown.js') }}"></script>
<script src="{{ asset('style/assets/theme/js/script.js') }}"></script>
<script src="{{ asset('style/assets/formoid/formoid.min.js') }}"></script>
<!--{{ asset('style/') }} -->

</body>

</html>
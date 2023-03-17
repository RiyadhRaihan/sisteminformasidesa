@extends('layouts.master')

@section('content')

<section data-bs-version="5.1" class="form5 cid-t89cJ129HG" id="form5-u">
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Surat Pengantar</strong></h3>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="/surat/store" method="POST">
                    @csrf
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Nama Lengkap</legend>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" placeholder="Nama"><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Nomor Induk Kependudukan</legend>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nik" placeholder="NIK"><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Nomor Kartu Keluarga</legend>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nokk" placeholder="Nomor Kartu Keluarga"><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Alamat</legend>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat"><br>
                    </fieldset>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Surat Pengajuan</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis" id="gridRadios1" value="Pengantar KTP">
                                    <label class="form-check-label" for="gridRadios1">
                                        Pengantar KTP
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis" id="gridRadios1" value="Surat Kematian">
                                    <label class="form-check-label" for="gridRadios1">
                                        Surat Kematian
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis" id="gridRadios1" value="Surat Kelahiran">
                                    <label class="form-check-label" for="gridRadios1">
                                        Surat Kelahiran
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis" id="gridRadios1" value="RUTILAHU">
                                    <label class="form-check-label" for="gridRadios1">
                                        Rumah Tidak Layak Huni
                                    </label>
                                </div>
                    </fieldset>
                    <input type="submit" class="btn btn-info" name="submit" value="save">
                </form>
            </div>
        </div>
    </div>
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
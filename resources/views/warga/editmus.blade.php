@extends('layouts.master')

@section('content')

<body>
    <section data-bs-version="5.1" class="menu menu2 cid-sNkChMy3A4" once="menu" id="menu2-s">
        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="home">Home Admin</a></li>
            </div>
        </nav>
    </section>

    <section data-bs-version="5.1" class="form5 cid-t89cJ129HG" id="form5-u">
        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Musyawarah Perencanaan Pembangunan</strong></h3>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                    <form action="/mus/{{$mus->id}}" method="POST">
                        @method('put')
                        @csrf
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Nama Lengkap</legend>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{$mus->nama}}"><br>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Perwakilan RW</legend>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" name="rw" placeholder="RW" value="{{$mus->rw}}"><br>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Detail Usulan</legend>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="detail" placeholder="Detail Usulan" value="{{$mus->detail}}"><br>
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
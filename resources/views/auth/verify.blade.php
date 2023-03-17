@extends('layouts.app')

@section('content')
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.4.1, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="{{ asset('style/assets/images/download-letter-k-luxury-logo-design-concept-template-for-free-128x128.png') }}" type="image/x-icon">
    <meta name="description" content="">

    <!--{{ asset('style/') }} -->
    <title>Sistem Informasi Desa</title>
    <link rel="stylesheet" href="{{ asset('style/assets/web/assets/mobirise-icons2/mobirise2.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/bootstrap/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/bootstrap/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/dropdown/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/socicon/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/theme/css/style.css') }}">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap">
    </noscript>
    <link rel="preload" as="style" href="{{ asset('style/assets/mobirise/css/mbr-additional.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/mobirise/css/mbr-additional.css') }}" type="text/css">




</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
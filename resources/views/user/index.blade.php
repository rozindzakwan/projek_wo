@extends('user.layout')
@section('sidebar')
@if(session()->has('loginSukses'))
<script>
    alert('Selamat Datang <?= $nama = session()->get('name') ?> ');
</script>
@endif

<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="{{ route('dashboardUser.index') }}" class="navbar-brand">
                <h1 class="m-0 text-primary"><span class="text-dark">My</span>Wedding</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="{{ route('dashboardUser.index') }}" class="nav-item nav-link active">Utama</a>
                    <a href="{{ route('paketUser.index') }}" class="nav-item nav-link">Paket</a>
                    <a href="{{ route('sk') }}" class="nav-item nav-link">Syarat dan Ketentuan</a>
                    <a href="{{ route('jadwal.index') }}" class="nav-item nav-link">Jadwal</a>
                    <a href="{{ route('pemesananUser.index') }}" class="nav-item nav-link">Pemesanan</a>
                    @if (session()->get('id') != null)
                    <a href="{{ url('logout') }}" class="nav-item nav-link" style="color: red">Logout</a>
                    @else
                    <a href="{{ url('logout') }}" class="nav-item nav-link" style="color:green">Login</a>
                    @endif
                </div>
            </div>
        </nav>
    </div>
</div>
@endsection
@section('content')
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('foto/gambar1.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <img src="{{ asset('foto/logo.jpg') }}" alt="" style="border-radius: 50%; opacity: 0.7" srcset="" width="150px" height="150px">
                        <h1 class="display-3 mb-md-4" style="color:bisque">"More
                            Than More"</h1>
                        <a href="{{ route('paketUser.index') }}" class="btn btn-primary py-md-3 px-md-5 mt-2">Lihat
                            Paket</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('foto/gambar3.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <img src="{{ asset('foto/logo.jpg') }}" alt="" style="border-radius: 50%; opacity: 0.7" srcset="" width="150px" height="150px">
                        <h1 class="display-3 mb-md-4" style="color:bisque">"More Than More"</h1>
                        <a href="{{ route('paketUser.index') }}" class="btn btn-primary py-md-3 px-md-5 mt-2">Lihat
                            Paket</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>

@endsection
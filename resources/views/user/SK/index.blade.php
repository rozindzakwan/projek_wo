@extends('user.layout')
@section('sidebar')
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
                        <a href="{{ route('dashboardUser.index') }}" class="nav-item nav-link">Utama</a>
                        <a href="{{ route('paketUser.index') }}" class="nav-item nav-link">Paket</a>
                        <a href="{{ route('sk') }}" class="nav-item nav-link active">Syarat dan Ketentuan</a>
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
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Syarat dan Ketentuan</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h3>1. Booking dinyatakan sah setelah pembayaran DP 20% dari total pembayaran.</h3>
                <h3>2. Paket item tambahan dapat diorder apabila telah memilih paket utama</h3>
                <h3>3. Apabila terjadi pembatalan acara atau perubahan tanggal DP yang telah masuk tidak dapat dikembalikan
                    atau hangus
                </h3>
                <h3>4. Biaya transport disesuaikan dengan jarak tempuh</h3>
                <h3>5. Jam kerja maksimal sampai jam 15.30 WIB apabila ada penambahan waktu dikenakan biaya tambahan
                    senilai Rp. 500.000,-/Jam
                </h3>
                <h3>
                    6. Pelunasan pembayaran maksimal H-7 sebelum acara berlangsung
                </h3>



            </div>
        </div>
    </div>
@endsection

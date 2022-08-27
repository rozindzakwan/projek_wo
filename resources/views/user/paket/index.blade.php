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
                        <a href="{{ route('paketUser.index') }}" class="nav-item nav-link active">Paket</a>
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
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Daftar Paket</h3>
            </div>
        </div>
    </div>
    <style>
        #hov:hover {
            background-color: bisque;
        }

        #nd:hover {
            color: black;
            background-color: greenyellow;
        }
    </style>
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="row">
                @foreach ($paket as $data)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="package-item mb-2" id="hov">
                            <div class="text-center" style="padding-top:20px">
                                <h2
                                    style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                                    {{ $data->nama_paket }}</h2>
                            </div>
                            <div class="border-top mt-4 pt-4 d-flex justify-content-center">
                                <p>{!! $data->detail !!}</p>
                            </div>
                            <div class="p-4">
                                <div class="border-top mt-4 pt-4">
                                    <div class="text-center">
                                        <h5>{{ 'Rp. ' . number_format($data->harga_paket, 0, '.', '.') }}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div style="text-align: center">
                                <form action="{{ route('paketUser.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="paket" value="{{ $data->id }}">
                                    <button class="btn btn-success" style="border-radius: 20px" id="nd"
                                        type="submit">
                                        Pesan
                                    </button>
                                </form>
                            </div>
                            <div class="row">
                                <div><br></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

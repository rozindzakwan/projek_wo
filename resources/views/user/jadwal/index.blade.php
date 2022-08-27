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
                        <a href="{{ route('sk') }}" class="nav-item nav-link">Syarat dan Ketentuan</a>
                        <a href="{{ route('jadwal.index') }}" class="nav-item nav-link active">Jadwal</a>
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
                <h3 class="display-4 text-white text-uppercase">Jadwal</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="row">
                <div class="col-12">
                    <table class="table table-stripped" id="datatable">
                        @php
                            $no = 1;
                            use Carbon\Carbon;
                            $waktu = Carbon::now()->format('d-F-Y');
                        @endphp

                        @if (session()->get('name') == true)
                            <thead>
                                <th>No</th>
                                <th>Tanggal Pernikahan</th>
                                <th>Tempat</th>
                            </thead>
                            <tbody>
                                @foreach ($jadwal as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ date('d-F-Y', strtotime($data->tgl_nikah)) }}</td>
                                        <td>{{ $data->tmpt_nikah }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        @else
                            <p align="center">Anda Harus <a class="txt2 text-success" href="{{ url('login') }}">Login</a>
                                terlebih dahulu untuk Melihat Jadwal Ini
                            </p>
                        @endif

                    </table>
                    <div class="row">
                        <div class="col-5"></div>
                        <div>
                            {{ $jadwal->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

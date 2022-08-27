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
                        <a href="{{ route('jadwal.index') }}" class="nav-item nav-link">Jadwal</a>
                        <a href="{{ route('pemesananUser.index') }}" class="nav-item nav-link active">Pemesanan</a>
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
                <h3 class="display-4 text-white text-uppercase">Daftar Pemesanan</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Paket</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Tanggal Pernikahan</th>
                            <th>Tanggal Akhir Pembayaran</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            <style>
                                .file {
                                    opacity: 0;
                                    width: 0.1px;
                                    height: 0.1px;
                                    position: absolute;
                                }

                                .file-input label {
                                    display: block;
                                    position: relative;
                                    width: 80px;
                                    height: 40px;
                                    border-radius: 25px;
                                    background: linear-gradient(40deg, #ff6ec4, #7873f5);
                                    box-shadow: 0 4px 7px rgba(0, 0, 0, 0.4);
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    color: #fff;
                                    font-weight: bold;
                                    cursor: pointer;
                                    transition: transform .2s ease-out;
                                }

                                .file-name {
                                    position: absolute;
                                    bottom: -35px;
                                    left: 10px;
                                    font-size: 0.85rem;
                                    color: #555;
                                }

                                input:hover+label,
                                input:focus+label {
                                    transform: scale(1.02);
                                }

                                /* Adding an outline to the label on focus */
                                input:focus+label {
                                    outline: 1px solid #000;
                                    outline: -webkit-focus-ring-color auto 2px;
                                }
                            </style>
                            @php
                                $no = 1;
                                use Carbon\Carbon;
                                $waktu = Carbon::now()->format('d-F-Y');
                            @endphp
                            @foreach ($pemesanan as $data)
                                @php
                                    $akhirPembayaran = date('d-F-Y', strtotime($data->created_at . ' +3 days'));
                                    $tanggalPesan = date('d-F-Y', strtotime($data->created_at));
                                    $first_datetime = new DateTime($tanggalPesan);
                                    $last_datetime = new DateTime($akhirPembayaran);
                                    $interval = $first_datetime->diff($last_datetime);
                                    $final_dayt = $interval->format('%R%a');
                                    // dd($final_dayt);
                                @endphp
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->userF->name }}</td>
                                    <td>{{ $data->paketF->nama_paket }}</td>
                                    <td>{{ $tanggalPesan }}</td>
                                    <td>{{ date('d-F-Y', strtotime($data->tgl_nikah)) }}</td>
                                    <td>{{ $akhirPembayaran }}</td>
                                    <td>
                                        @if ($data->pembayaran == 'ditolak')
                                            ditolak karena {{ $data->alasan_batal }}
                                        @elseif ($final_dayt < 0)
                                            Terlambat Bayar
                                        @elseif ($data->pembayaran == 'belum bayar')
                                            <form action="{{ route('pemesananUser.update', $data->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <div class="row">
                                                    <div class="file-input col-6">
                                                        <input type="file" id="file" class="file" name="gambar"
                                                            required>
                                                        <label for="file">
                                                            Upload
                                                            <p class="file-name"></p>
                                                        </label>
                                                    </div>
                                                    <div class="col-6">
                                                        <button class="btn"
                                                            style="border-radius: 50px;background: linear-gradient(40deg, #ff6ec4, #7873f5);color:white"
                                                            type="submit">
                                                            Bayar
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        @elseif ($data->pembayaran == 'menunggu')
                                            Menunggu ACC
                                        @elseif ($data->pembayaran == 'diterima')
                                            <a href="{{ route('pemesananUser.show', $data->id) }}" target="_blank">
                                                <button class="btn btn-success">
                                                    <i class="fas fa-print"></i>
                                                </button>
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

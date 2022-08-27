@extends('admin.layout')
@section('sidebar')
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('paket.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        paket
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">
                    <i class="nav-icon far fa-user"></i>
                    <p>
                        User
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('pemesanan.index') }}" class="nav-link">
                    <i class="nav-icon far fa-calendar"></i>
                    <p>
                        Pemesanan
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('laporan.index') }}" class="nav-link active">
                    <i class="nav-icon far fa-money-bill-alt"></i>
                    <p>
                        Laporan
                    </p>
                </a>
            </li>
        </ul>
    </nav>
@endsection
@section('content')
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="col-sm-12 text-center">
                <h1 class="m-0">Laporan</h1>
            </div><br>
            <div class="card">
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">
                    <label for="" style="text-align: center">Bulan</label>
                    <form action="{{ route('laporan.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-8">
                                <select name="bulan" id="" class="form-control">
                                    <option value="" selected disabled>-- Pilih Bulan --</option>
                                    <option value="1" <?php if (isset($bulan)) {
                                        if ($bulan == 1) {
                                            echo 'selected';
                                        }
                                    } ?>>Januari</option>
                                    <option value="2" <?php if (isset($bulan)) {
                                        if ($bulan == 2) {
                                            echo 'selected';
                                        }
                                    } ?>>Februari</option>
                                    <option value="3" <?php if (isset($bulan)) {
                                        if ($bulan == 3) {
                                            echo 'selected';
                                        }
                                    } ?>>Maret</option>
                                    <option value="4" <?php if (isset($bulan)) {
                                        if ($bulan == 4) {
                                            echo 'selected';
                                        }
                                    } ?>>April</option>
                                    <option value="5" <?php if (isset($bulan)) {
                                        if ($bulan == 5) {
                                            echo 'selected';
                                        }
                                    } ?>>Mei</option>
                                    <option value="6" <?php if (isset($bulan)) {
                                        if ($bulan == 6) {
                                            echo 'selected';
                                        }
                                    } ?>>Juni</option>
                                    <option value="7" <?php if (isset($bulan)) {
                                        if ($bulan == 7) {
                                            echo 'selected';
                                        }
                                    } ?>>Juli</option>
                                    <option value="8" <?php if (isset($bulan)) {
                                        if ($bulan == 8) {
                                            echo 'selected';
                                        }
                                    } ?>>Agustus</option>
                                    <option value="9" <?php if (isset($bulan)) {
                                        if ($bulan == 9) {
                                            echo 'selected';
                                        }
                                    } ?>>September</option>
                                    <option value="10" <?php if (isset($bulan)) {
                                        if ($bulan == 10) {
                                            echo 'selected';
                                        }
                                    } ?>>Oktober</option>
                                    <option value="11" <?php if (isset($bulan)) {
                                        if ($bulan == 11) {
                                            echo 'selected';
                                        }
                                    } ?>>November</option>
                                    <option value="12" <?php if (isset($bulan)) {
                                        if ($bulan == 12) {
                                            echo 'selected';
                                        }
                                    } ?>>Desember</option>
                                </select>
                            </div>
                        </div>
                </div>
                <div class="col-4">
                    <label for="">Tahun</label>
                    <div class="row">
                        <div class="col-8">
                            <select name="tahun" id="" class="form-control">
                                <option value="" selected disabled>-- Pilih Tahun --</option>
                                @for ($i = 2022; $i <= 2032; $i++)
                                    <option value="{{ $i }}" <?php if (isset($tahun)) {
                                        if ($tahun == $i) {
                                            echo 'selected';
                                        }
                                    } ?>>{{ $i }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div><br><br>
            @if (isset($bulan) || isset($tahun))
                <div class="row">
                    <div class="mb-3 card col-4">
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="row text-center" style="border-bottom: solid">
                                    <h4>Total Pemesanan</h4>
                                </div><br>
                                <div class="row text-center">
                                    <h3>{{ $tam->count() }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 card col-4">
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="row text-center" style="border-bottom: solid">
                                    <h4>Pemesanan Ditolak</h4>
                                </div><br>
                                <div class="row text-center">
                                    <h3>{{ $tam->where('pembayaran', '=', 'ditolak')->count() }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 card col-4">
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="row text-center" style="border-bottom: solid">
                                    <h4>Pemesanan Diterima</h4>
                                </div><br>
                                <div class="row text-center">
                                    <h3>{{ $tam->where('pembayaran', '=', 'diterima')->count() }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-5">
                        <div class="mb-3 card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="row text-center">
                                        <h4>Paket Dipesan</h4>
                                    </div><br>
                                    <div class="row text-center">
                                        <table class="table" style="border: solid">
                                            <thead>
                                                <th>Paket</th>
                                                <th>Jumlah</th>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $total = 0;
                                                    // error_reporting(0);
                                                    // dd($tamDet);
                                                @endphp
                                                @if ($tamDet != null)
                                                    @for ($i = 0; $i < count($tamDet); $i++)
                                                        <tr>
                                                            <td class="text-center">
                                                                {{ $tamDet[$i]->paketF->nama_paket }}
                                                            </td>
                                                            <td class="text-center">{{ $tamDet[$i]->total }}</td>
                                                        </tr>
                                                    @endfor
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="mb-3 card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="row text-center" style="border-bottom: solid">
                                        <h4>Total Pemasukan</h4>
                                    </div><br>
                                    @php
                                        $total = 0;
                                    @endphp
                                    @foreach ($tam as $tamp)
                                        @php
                                            if ($tamp->pembayaran == 'diterima') {
                                                $total += $tamp->paketF->harga_paket;
                                            }
                                        @endphp
                                    @endforeach
                                    <div class="row text-center">
                                        <h3>{{ 'Rp. ' . number_format($total, 0, '.', '.') }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div style="text-align: end">
                        <button class="btn btn-primary print-window">
                            Cetak
                        </button>
                    </div>
                </div>
            @endif
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

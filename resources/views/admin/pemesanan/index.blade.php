@extends('admin.layout')
@section('sidebar')
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('paket.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Paket
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
                <a href="{{ route('pemesanan.index') }}" class="nav-link active">
                    <i class="nav-icon far fa-calendar"></i>
                    <p>
                        Pemesanan
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('laporan.index') }}" class="nav-link">
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
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pemesanan</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @foreach ($pemesanan as $data)
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <table class="table">
                                        <tr>
                                            <td>Id Pemesanan</td>
                                            <td> : {{ 'PMS' . $data->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Pemesan</td>
                                            <td> : {{ $data->userF->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Paket</td>
                                            <td> : {{ $data->paketF->nama_paket }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pengantin Pria</td>
                                            <td> : {{ $data->pp }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pengantin Wanita</td>
                                            <td> : {{ $data->pw }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tempat</td>
                                            <td> : {{ $data->tmpt_nikah }}</td>
                                        </tr>
                                        <tr>
                                            <td>No Tlp</td>
                                            <td> : {{ $data->hp_pp }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Pemesanan</td>
                                            <td> : {{ date('d F Y', strtotime($data->created_at)) }}</td>
                                        </tr>
                                        <tr>
                                            @php
                                                $waktu2 = date('d F Y', strtotime($data->created_at . ' +3 days'));
                                            @endphp
                                            <td>Tanggal Akhir Pembayaran</td>
                                            <td> : {{ $waktu2 }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Pernikahan</td>
                                            <td> : {{ date('d F Y', strtotime($data->tgl_nikah)) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Status Pembayaran</td>
                                            <td> : {{ $data->pembayaran }}</td>
                                        </tr>
                                    </table>
                                    @if ($data->pembayaran == 'menunggu')
                                        <div class="text-center">
                                            <a data-target="#view{{ $data->id }}" data-toggle="modal">
                                                <button class="btn btn-outline-primary">
                                                    Bukti Pembayaran
                                                </button>
                                            </a>
                                        </div>
                                    @endif
                                    <div><br></div>
                                    <div class="row">
                                        <div class="col-6">
                                            <form action="{{ route('pemesanan.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a data-target="#tolak{{ $data->id }}" data-toggle="modal">
                                                    <button class="btn btn-danger" type="submit">Tolak</button>
                                                </a>
                                            </form>
                                        </div>
                                        @if ($data->pembayaran == 'menunggu')
                                            <div class="col-6" style="text-align: end">
                                                <a href="{{ route('pemesanan.edit', $data->id) }}">
                                                    <button class="btn btn-success" type="submit">Terima</button>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="view{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div style="text-align: center">
                                        <img width="400px" src="{{ asset('data_file/' . $data->gambar) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="tolak{{ $data->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Alasan Ditolak</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('pemesanan.update', $data->id) }}" method="POST">
                                        <div style="text-align: center">
                                            @csrf
                                            @method('PUT')
                                            <textarea name="alasan" id="" cols="50" rows="10" class="form-control"></textarea>
                                        </div><br>
                                        <div style="text-align: end">
                                            <button type="submit" class="btn btn-primary">
                                                input
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><br><br>
        <div class="row">
            {{ $pemesanan->links('vendor.pagination.custom') }}
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

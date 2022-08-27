@extends('admin.layout')
@section('sidebar')
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('paket.index') }}" class="nav-link active">
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
                <a href="{{ route('pemesanan.index') }}" class="nav-link">
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
                    <h1 class="m-0">Edit Paket</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <a href="{{ route('paket.index') }}">
                                        <button class="btn btn-success">
                                            kembali
                                        </button>
                                    </a>
                                </div>
                                <br>
                            </div><br>
                            <div class="row">
                                <form action="{{ route('paket.update', $paket->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <label for="">Nama Paket</label>
                                    <input type="text" name="nama_paket" class="form-control"
                                        value="{{ $paket->nama_paket }}">
                                    <label for="">Harga Paket</label>
                                    <input type="text" name="harga_paket" class="form-control"
                                        value="{{ $paket->harga_paket }}"><br>
                                    <label for="">Detail</label>
                                    <textarea name="detail" id="my-editor" class="my-editor form-control" cols="30" rows="10">
                                        {{ $paket->detail }}
                                    </textarea>
                                    <div style="text-align: end">
                                        <button type="submit" class="btn btn-primary">
                                            Input
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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
                    <h1 class="m-0">Paket</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <a href="{{ route('paket.create') }}">
                                        <button class="btn btn-primary">
                                            Tambah paket
                                        </button>
                                    </a>
                                </div>
                                <br>
                            </div><br>
                            <div class="row">
                                <table class="table table-stripped" id="datatable">
                                    <thead>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Paket</th>
                                        <th class="text-center">Harga Paket</th>
                                        <th class="text-center">Detail</th>
                                        <th class="text-center">Action</th>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($paket as $item)
                                            <tr>
                                                <td class="text-center">{{ $no++ }}</td>
                                                <td class="text-center">{{ $item->nama_paket }}</td>
                                                <td class="text-center">
                                                    {{ 'Rp. ' . number_format($item->harga_paket, 0, '.', '.') }}</td>
                                                <td class="text-center">
                                                    <a data-target="#view{{ $item->id }}" data-toggle="modal">
                                                        <i class="fas fa-eye btn btn-outline-primary"></i>
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <a href="{{ route('paket.edit', $item->id) }}">
                                                                <i class="fas fa-edit btn btn-outline-warning"></i>
                                                            </a>
                                                        </div>
                                                        <div class="col-6">
                                                            <form action="{{ route('paket.destroy', $item->id) }}"
                                                                method="POST">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-outline-danger">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="view{{ $item->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Detail Paket
                                                                {{ $item->nama_paket }}
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="d-flex justify-content-center">
                                                                <p>{!! $item->detail !!}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->

                    {{-- <div class="card">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Products</h3>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-tool btn-sm">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-tool btn-sm">
                                            <i class="fas fa-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-striped table-valign-middle">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Sales</th>
                                                <th>More</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="dist/img/default-150x150.png" alt="Product 1"
                                                        class="img-circle img-size-32 mr-2">
                                                    Some Product
                                                </td>
                                                <td>$13 USD</td>
                                                <td>
                                                    <small class="text-success mr-1">
                                                        <i class="fas fa-arrow-up"></i>
                                                        12%
                                                    </small>
                                                    12,000 Sold
                                                </td>
                                                <td>
                                                    <a href="#" class="text-muted">
                                                        <i class="fas fa-search"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="dist/img/default-150x150.png" alt="Product 1"
                                                        class="img-circle img-size-32 mr-2">
                                                    Another Product
                                                </td>
                                                <td>$29 USD</td>
                                                <td>
                                                    <small class="text-warning mr-1">
                                                        <i class="fas fa-arrow-down"></i>
                                                        0.5%
                                                    </small>
                                                    123,234 Sold
                                                </td>
                                                <td>
                                                    <a href="#" class="text-muted">
                                                        <i class="fas fa-search"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="dist/img/default-150x150.png" alt="Product 1"
                                                        class="img-circle img-size-32 mr-2">
                                                    Amazing Product
                                                </td>
                                                <td>$1,230 USD</td>
                                                <td>
                                                    <small class="text-danger mr-1">
                                                        <i class="fas fa-arrow-down"></i>
                                                        3%
                                                    </small>
                                                    198 Sold
                                                </td>
                                                <td>
                                                    <a href="#" class="text-muted">
                                                        <i class="fas fa-search"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="dist/img/default-150x150.png" alt="Product 1"
                                                        class="img-circle img-size-32 mr-2">
                                                    Perfect Item
                                                    <span class="badge bg-danger">NEW</span>
                                                </td>
                                                <td>$199 USD</td>
                                                <td>
                                                    <small class="text-success mr-1">
                                                        <i class="fas fa-arrow-up"></i>
                                                        63%
                                                    </small>
                                                    87 Sold
                                                </td>
                                                <td>
                                                    <a href="#" class="text-muted">
                                                        <i class="fas fa-search"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> --}}
                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

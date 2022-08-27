@extends('admin.layout')
@section('sidebar')
@if(session()->has('loginSukses'))
<script>
    alert('Selamat Datang <?= $nama = session()->get('name') ?> ');
</script>
@endif
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
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid text-center" style="padding-top:270px">
        <h1>MY WEDDING ORGANIZER</h1>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
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
            <h3 class="display-4 text-white text-uppercase">Isi Form</h3>
        </div>
    </div>
</div>
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="mb-3 pb-3">
            <form action="{{ route('detailPemesananUser.store') }}" method="POST">
                @csrf
                <div class="row" style="border-top: solid;border-left:solid;border-right:solid;"> <br>
                    <div class="col-3"><br>
                        <label for="">Pengantin Pria *</label>
                        <input type="text" class="form-control" name="pp" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                    </div>
                    <div class="col-3"><br>
                        <label for="">Pengantin Wanita *</label>
                        <input type="text" class="form-control" name="pw" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                    </div>
                    <div class="col-3"><br>
                        @php
                        use Carbon\Carbon;
                        $waktu = Carbon::now()->format('d-m-Y');
                        $waktu2 = date('Y-m-d', strtotime($waktu . ' +4 days'));
                        @endphp
                        <label for="">Tanggal Pernikahan *</label>
                        <input type="date" class="form-control" name="tgl_nikah" min="{{ $waktu2 }}" required>
                    </div>
                    <div class="col-3"><br>
                        <label for="">Tempat Pernikahan *</label>
                        <input type="text" class="form-control" name="tmpt_nikah" required>
                    </div>
                </div>
                <div class="row" style="border-left:solid;border-right:solid;border-bottom:solid">
                    <div class="col-6"></div>
                    <div class="col-6"><br></div>
                </div><br>
                <div style="text-align: center">
                    <h4>Keluarga</h4>
                </div><br>
                <div style="border-top: solid;border-left:solid;border-right:solid;" class="row">
                    <div class="col-6">
                    </div>
                    <div class="col-6" style="border-left: solid"><br></div>
                </div>
                <div class="row" style="border-left:solid;border-right:solid;">
                    <div class="col-6" style="text-align: center">
                        <h4>Keluarga Pengantin Pria</h4>
                    </div>
                    <div class="col-6" style="text-align: center; border-left:solid">
                        <h4>Keluarga Pengantin Wanita</h4>
                    </div>
                </div>
                <div class="row" style="border-left: solid;border-right:solid">
                    <div class="col-6"></div>
                    <div class="col-6" style="border-left: solid; border-left:solid"><br></div>
                </div>
                <div class="row" style="border-left: solid;border-right:solid">
                    <div class="col-3">
                        <label for="">Nama Ayah *</label>
                        <input type="text" class="form-control" name="ayah_pp" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                    </div>
                    <div class="col-3">
                        <label for="">Nama Ibu *</label>
                        <input type="text" class="form-control" name="ibu_pp" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                    </div>
                    <div class="col-3" style="border-left: solid">
                        <label for="">Nama Ayah *</label>
                        <input type="text" class="form-control" name="ayah_pw" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                    </div>
                    <div class="col-3">
                        <label for="">Nama Ibu *</label>
                        <input type="text" class="form-control" name="ibu_pw" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                    </div>
                </div>
                <div class="row" style="border-left: solid;border-right:solid">
                    <div class="col-6">
                        <label for="">Alamat *</label>
                        <textarea name="alamat_pp" id="" cols="60" rows="5" class="form-control" required>

                            </textarea>
                    </div>
                    <div class="col-6" style="border-left: solid">
                        <label for="">Alamat *</label>
                        <textarea name="alamat_pw" id="" cols="60" rows="5" class="form-control" required>

                            </textarea>
                    </div>
                </div>
                <div class="row" style="border-left: solid;border-right:solid">
                    <div class="col-3">
                        <label for="">Nama Akun IG</label>
                        <input type="text" class="form-control" name="ig_pp">
                    </div>
                    <div class="col-3">
                        <label for="">Nomer Hp *</label>
                        <input type="text" class="form-control" name="hp_pp" required minlength="10" maxlength="13" pattern="[0-9]+">
                    </div>
                    <div class="col-3" style="border-left: solid">
                        <label for="">Nama Akun IG</label>
                        <input type="text" class="form-control" name="ig_pw">
                    </div>
                    <div class="col-3">
                        <label for="">Nomer Hp *</label>
                        <input type="text" class="form-control" name="hp_pw" required minlength="10" maxlength="13" pattern="[0-9]+">
                    </div>
                </div>
                <div class="row" style="border-left: solid;border-right:solid">
                    <div class="col-3">
                        <label for="">Nama Ayah Sambung</label>
                        <input type="text" class="form-control" onkeypress="return event.charCode < 48 || event.charCode  >57" name="ayah_sambung_pp">
                    </div>
                    <div class="col-3">
                        <label for="">Nama Ibu Sambung</label>
                        <input type="text" class="form-control" onkeypress="return event.charCode < 48 || event.charCode  >57" name="ibu_sambung_pp">
                    </div>
                    <div class="col-3" style="border-left: solid">
                        <label for="">Nama Ayah Sambung</label>
                        <input type="text" class="form-control" onkeypress="return event.charCode < 48 || event.charCode  >57" name="ayah_sambung_pw">
                    </div>
                    <div class="col-3">
                        <label for="">Nama Ibu Sambung</label>
                        <input type="text" class="form-control" onkeypress="return event.charCode < 48 || event.charCode  >57" name="ibu_sambung_pw">
                    </div>
                </div>
                <div class="row" style="border-bottom: solid;border-left: solid;border-right:solid">
                    <div class="col-6"></div>
                    <div class="col-6" style="border-left: solid"><br></div>
                </div><br>
                <div style="text-align: center">
                    <h4>Lain-Lain</h4>
                </div><br>
                <div style="border-top: solid;border-left:solid;border-right:solid;" class="row">
                    <div class="col-6">
                    </div>
                    <div class="col-6" style="border-left: solid"><br></div>
                </div>
                <div style="border-left:solid;border-right:solid" class="row">
                    <div class="col-6" style="text-align: center">
                        <h4>Petugas</h4>
                    </div>
                    <div class="col-6" style="text-align: center; border-left:solid">
                        <h4>Vendor</h4>
                    </div>
                </div>
                <div class="row" style="border-left:solid;border-right:solid;">
                    <div class="col-6"></div>
                    <div class="col-6" style="border-left: solid"><br></div>
                </div>
                <div class="row" style="border-left: solid;border-right:solid">
                    <div class="col-3">
                        <label for="">Pembaca Al-Qur'an *</label>
                        <input type="text" class="form-control" name="pembaca_quran" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                    </div>
                    <div class="col-3">
                        <label for="">Pidato Penyerahan *</label>
                        <input type="text" class="form-control" name="pidato_penyerahan" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                    </div>
                    <div class="col-3" style="border-left: solid">
                        <label for="">Make Up *</label>
                        <input type="text" class="form-control" name="make_up" required>
                    </div>
                    <div class="col-3">
                        <label for="">Busana *</label>
                        <input type="text" class="form-control" name="busana" required>
                    </div>
                </div>
                <div class="row" style="border-left: solid;border-right:solid">
                    <div class="col-3">
                        <label for="">Pidato Penerimaan *</label>
                        <input type="text" class="form-control" name="pidato_penerimaan" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                    </div>
                    <div class="col-3">
                        <label for="">Saksi dari Pengantin Pria *</label>
                        <input type="text" class="form-control" name="saksi_pp" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                    </div>
                    <div class="col-3" style="border-left: solid">
                        <label for="">Dekorasi *</label>
                        <input type="text" class="form-control" name="dekorasi" required>
                    </div>
                    <div class="col-3">
                        <label for="">Foto *</label>
                        <input type="text" class="form-control" name="foto" required>
                    </div>
                </div>
                <div class="row" style="border-left: solid;border-right:solid">
                    <div class="col-3">
                        <label for="">Saksi dari Pengantin Wanita *</label>
                        <input type="text" class="form-control" name="saksi_pw" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                    </div>
                    <div class="col-3">
                        <label for="">PJ Mahar dan Seserahan *</label>
                        <input type="text" class="form-control" name="pj_mahar" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                    </div>
                    <div class="col-2" style="border-left: solid;text-align:center">
                        <label for="">Video *</label>
                        <input type="text" class="form-control" name="video" required>
                    </div>
                    <div class="col-2" style="text-align: center">
                        <label for="">Henna *</label>
                        <input type="text" class="form-control" name="henna" required>
                    </div>
                    <div class="col-2" style="text-align: center">
                        <label for="">Tenda *</label>
                        <input type="text" class="form-control" name="tenda" required>
                    </div>
                </div>
                <div class="row" style="border-left: solid;border-right:solid">
                    <div class="col-3">
                        <label for="">Ketua Panitia *</label>
                        <input type="text" class="form-control" name="ketua_panitia" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                    </div>
                    <div class="col-3">
                        <label for="">Jml Rombongan Seserahan *</label>
                        <input type="text" class="form-control" name="jml_rombongan" pattern="[0-9]+" required>
                    </div>
                    <div class="col-2" style="border-left: solid;text-align:center">
                        <label for="">Hiburan *</label>
                        <input type="text" class="form-control" name="hiburan" required>
                    </div>
                    <div class="col-2" style="text-align: center">
                        <label for="">Seni *</label>
                        <input type="text" class="form-control" name="seni" required>
                    </div>
                    <div class="col-2" style="text-align: center">
                        <label for="">Catering *</label>
                        <input type="text" class="form-control" name="catering" required>
                    </div>
                </div>
                <div class="row" style="border-bottom: solid;border-left: solid;border-right:solid">
                    <div class="col-6"></div>
                    <div class="col-6" style="border-left: solid"><br></div>
                </div><br>
                <div style="text-align: center">
                    <h4>Daftar Foto</h4>
                </div><br>
                <div style="border:solid" class="row">
                    <div class="col-6" style="text-align: center">
                        <h4>Keluarga Pengantin Pria *</h4>
                    </div>
                    <div class="col-6" style="text-align: center; border-left:solid">
                        <h4>Keluarga Pengantin Wanita *</h4>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="form-group fieldGroup col-6">
                                <div class="input-group">
                                    <input type="text" name="foto_pp[]" class="form-control" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                                    <div class="input-group-addon">
                                        <a href="javascript:void(0)" class="btn btn-success addMore">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6" style="border-left: solid">
                        <div class="row">
                            <div class="form-group fieldGroup1 col-6">
                                <div class="input-group">
                                    <input type="text" name="foto_pw[]" class="form-control" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                                    <div class="input-group-addon">
                                        <a href="javascript:void(0)" class="btn btn-success addMore1">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div style="text-align: center">
                    <h4>Tambahan</h4>
                </div><br>
                <div class="row">
                    <div class="col-12">
                        <textarea name="tambahan" id="my-editor" class="my-editor form-control" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div>
                    Ket : <br>
                    - * wajib diisi <br>
                    - tanggal pernikahan minimal 4 hari setelah pemesanan
                </div><br>
                <div style="text-align: end" class="row">
                    <button class="btn btn-success col-12">Input</button>
                </div>
                <input type="hidden" name="paket" value="{{ $paket }}">
            </form>
            <div class="form-group fieldGroupCopy col-6" style="display: none;">
                <div class="input-group">
                    <input type="text" name="foto_pp[]" class="form-control">
                    <div class="input-group-addon">
                        <a href="javascript:void(0)" class="btn btn-danger remove">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="form-group fieldGroupCopy1 col-6" style="display: none;">
                <div class="input-group">
                    <input type="text" name="foto_pw[]" class="form-control">
                    <div class="input-group-addon">
                        <a href="javascript:void(0)" class="btn btn-danger remove1">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
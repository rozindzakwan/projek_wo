<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak</title>
    <link href="{{ asset('bootUser/img/favicon.icon" rel="icon') }}">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('bootUser/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootUser/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('bootUser/css/style.css') }}" rel="stylesheet">
</head>

<body onload="print()">
    <style>
        .miring {
            font-style: italic;
        }

        #logo {
            max-width: 100%;
            max-height: 100%;
        }

        table {
            border-collapse: collapse;
        }
    </style>
    <div class="row" style="border-bottom:solid">
        <div class="col-3" style="">
            <img src="{{ asset('foto/logo3.png') }}"style='height: 100%; width: 100%; object-fit: contain'>
        </div>
        <div class="col-6 text-center">
            <h1>MY WEDDING ORGANIZER</h1>
            <h3 class="miring">"MORE THAN MORE"</h3>
        </div>
        <div class="col-3">
            <img src="{{ asset('foto/logo3.png') }}"style='height: 100%; width: 100%; object-fit: contain'>
        </div>
    </div><br>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 text-center" style="border: solid">
            <h3>PERNIKAHAN</h3>
            <h4 class="miring">{{ $id->pp }} dengan {{ $id->pw }}</h4>
            <h5>{{ date('d/m/Y', strtotime($id->tgl_nikah)) }}</h5>
            <h5>{{ $id->tmpt_nikah }}</h5>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10" style="border: solid">
            <div class="row">
                <div class="col-6">
                    <table class="table">
                        <tr>
                            <td>Nama Ayah</td>
                            <td>: {{ $id->ayah_pp }}</td>
                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td>: {{ $id->ibu_pp }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: {{ $id->alamat_pp }}</td>
                        </tr>
                        <tr>
                            <td>Nama Akun IG</td>
                            <td>: {{ $id->ig_pp }}</td>
                        </tr>
                        <tr>
                            <td>Nomer HP</td>
                            <td>: {{ $id->hp_pp }}</td>
                        </tr>
                        <tr>
                            <td>Nama Ayah Sambung</td>
                            <td>: {{ $id->ayah_sambung_pp }}</td>
                        </tr>
                        <tr>
                            <td>Nama Ibu Sambung</td>
                            <td>: {{ $id->ibu_sambung_pp }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-6">
                    <table class="table">
                        <tr>
                            <td>Nama Ayah</td>
                            <td>: {{ $id->ayah_pw }}</td>
                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td>: {{ $id->ibu_pw }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: {{ $id->alamat_pw }}</td>
                        </tr>
                        <tr>
                            <td>Nama Akun IG</td>
                            <td>: {{ $id->ig_pw }}</td>
                        </tr>
                        <tr>
                            <td>Nomer HP</td>
                            <td>: {{ $id->hp_pw }}</td>
                        </tr>
                        <tr>
                            <td>Nama Ayah Sambung</td>
                            <td>: {{ $id->ayah_sambung_pw }}</td>
                        </tr>
                        <tr>
                            <td>Nama Ibu Sambung</td>
                            <td>: {{ $id->ibu_sambung_pw }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div><br>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-5">
            <h5>*CPW Calon Pengantin Wanita</h5>
        </div>
        <div class="col-5">
            <h5>*CPP Calon Pengantin Pria</h5>
        </div>
    </div><br>
    <div class="row">
        <div class="col-1">&nbsp;</div>
        <div class="col-10">
            <div class="row">
                <table style="border: solid; width: 100%; margin-bottom: 5rem;" class="text-center" cellpadding="10">
                    <thead>
                        <th colspan="2" style="border: solid;text-align:center">NAMA PETUGAS</th>
                        <th colspan="2" style="border: solid;text-align:center">NAMA VENDOR</th>
                    </thead>
                    <tbody style="border: solid">
                        <tr>
                            <td style="border: solid">PEMBACA AL-QUR'AN</td>
                            <td style="border: solid">{{ $id->pembaca_quran }}</td>
                            <td style="border: solid">MAKE UP</td>
                            <td style="border: solid">{{ $id->make_up }}</td>
                        </tr>
                        <tr>
                            <td style="border: solid">PIDATO PENYERAHAN</td>
                            <td style="border: solid">{{ $id->pidato_penyerahan }}</td>
                            <td style="border: solid">BUSANA</td>
                            <td style="border: solid">{{ $id->busana }}</td>
                        </tr>
                        <tr>
                            <td style="border: solid">PIDATO PENERIMAAN</td>
                            <td style="border: solid">{{ $id->pidato_penerimaan }}</td>
                            <td style="border: solid">DEKORASI</td>
                            <td style="border: solid">{{ $id->dekorasi }}</td>
                        </tr>
                        <tr>
                            <td style="border: solid">SAKSI DARI CPP</td>
                            <td style="border: solid">{{ $id->saksi_pp }}</td>
                            <td style="border: solid">FOTO</td>
                            <td style="border: solid">{{ $id->foto }}</td>
                        </tr>
                        <tr>
                            <td style="border: solid">SAKSI DARI CPW</td>
                            <td style="border: solid">{{ $id->saksi_pw }}</td>
                            <td style="border: solid">VIDEO</td>
                            <td style="border: solid">{{ $id->video }}</td>
                        </tr>
                        <tr>
                            <td style="border: solid; padding: 10px;" rowspan="4">
                                PENANGGUNG JAWAB PENYIMPANAN MAHAR DAN SESERAHAN
                            </td>
                            <td style="border: solid" rowspan="4">{{ $id->pj_mahar }}</td>
                            <td style="border: solid">HENNA</td>
                            <td style="border: solid">{{ $id->henna }}</td>
                        </tr>
                        <tr>
                            <td style="border: solid">TENDA</td>
                            <td style="border: solid">{{ $id->tenda }}</td>
                        </tr>
                        <tr>
                            <td style="border: solid">HIBURAN</td>
                            <td style="border: solid">{{ $id->hiburan }}</td>
                        </tr>
                        <tr>
                            <td style="border: solid">SENI</td>
                            <td style="border: solid">{{ $id->seni }}</td>
                        </tr>
                        <tr>
                            <td style="border: solid">
                                KETUA PANITIA KELUARGA CPW
                            </td>
                            <td style="border: solid">{{ $id->ketua_panitia }}</td>
                            <td style="border: solid" rowspan="2">CATERING</td>
                            <td style="border: solid" rowspan="2">{{ $id->catering }}</td>
                        </tr>
                        <tr>
                            <td style="border: solid">JUMLAH ROMBONGAN SESERAHAN</td>
                            <td style="border: solid">{{ $id->jml_rombongan }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-1">&nbsp;</div>
    </div><br><br><br><br><br><br><br>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <div class="row">
                <div class="col-6" style="border: solid">
                    <table class="table text-center">
                        <thead>
                            <th style="border-bottom: solid">DAFTAR FOTO KELUARGA PENGANTIN PRIA</th>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                                $pecah = explode(',', $id->foto_pp);
                            @endphp
                            @foreach ($pecah as $item)
                                <tr>
                                    <td>{{ $no++ . '. ' . $item }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-6" style="border: solid">
                    <table class="table text-center">
                        <thead>
                            <th style="border-bottom: solid">DAFTAR FOTO KELUARGA PENGANTIN WANITA</th>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                                $pecah = explode(',', $id->foto_pw);
                            @endphp
                            @foreach ($pecah as $item)
                                <tr>
                                    <td>{{ $no++ . '. ' . $item }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><br><br><br>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 text-center" style="border: solid">
            <h5>CATATAN TAMBAHAN</h5>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 text-center" style="border: solid">
            <p>{!! $id->tambahan !!}</p>
        </div>
    </div><br><br>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <p>Terimakasih {{ $id->pp }} dan {{ $id->pw }} atas waktunya telah
                mengisi formulir Data Pengantin My Wedding Organizer. Data ini akan menjadi acuan tim
                My Wedding Organizer pada saat hari H pelaksanaan. Jika ada perubahan setelah data ini
                dibuat, silahkan hubungi admin melalui Nomor WhatsApp 081220137263 atau
                disampaikan pada saat rapat keluarga</p><br><br><br>
            <h5>Salam Hangat</h5><br><br>
            <h5>My Wedding Organizer</h5>
        </div>
    </div>


</body>
<script src="{{ asset('bootAdmin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('bootAdmin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('bootAdmin/dist/js/adminlte.js') }}"></script>

</html>

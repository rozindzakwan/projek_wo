<?php

namespace App\Http\Controllers;

use App\Models\DetailPemesanan;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\PseudoTypes\False_;

class detailPemesananControllerUser extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.detailPemesanan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ft_pp = implode(', ', array_values($request->foto_pp));
        $ft_pw = implode(', ', array_values($request->foto_pw));
        $user = session()->get('id');
        $cek = DetailPemesanan::where('tgl_nikah', $request->tgl_nikah)->first();
        // dd($cek);
        if ($cek == false) {
            DetailPemesanan::create([
                "user" => $user,
                "paket" => $request->paket,
                "pembayaran" => "belum bayar",
                "pp" => $request->pp,
                "pw" => $request->pw,
                "tgl_nikah" => $request->tgl_nikah,
                "tmpt_nikah" => $request->tmpt_nikah,
                "ayah_pp" => $request->ayah_pp,
                "ibu_pp" => $request->ibu_pp,
                "alamat_pp" => $request->alamat_pp,
                "ig_pp" => $request->ig_pp,
                "hp_pp" => $request->hp_pp,
                "ayah_sambung_pp" => $request->ayah_sambung_pp,
                "ibu_sambung_pp" => $request->ibu_sambung_pp,
                "ayah_pw" => $request->ayah_pw,
                "ibu_pw" => $request->ibu_pw,
                "alamat_pw" => $request->alamat_pw,
                "ig_pw" => $request->ig_pw,
                "hp_pw" => $request->hp_pw,
                "ayah_sambung_pw" => $request->ayah_sambung_pw,
                "ibu_sambung_pw" => $request->ibu_sambung_pw,
                "pembaca_quran" => $request->pembaca_quran,
                "pidato_penyerahan" => $request->pidato_penyerahan,
                "pidato_penerimaan" => $request->pidato_penerimaan,
                "saksi_pp" => $request->saksi_pp,
                "saksi_pw" => $request->saksi_pw,
                "pj_mahar" => $request->pj_mahar,
                "ketua_panitia" => $request->ketua_panitia,
                "jml_rombongan" => $request->jml_rombongan,
                "make_up" => $request->make_up,
                "busana" => $request->busana,
                "dekorasi" => $request->dekorasi,
                "foto" => $request->foto,
                "video" => $request->video,
                "henna" => $request->henna,
                "tenda" => $request->tenda,
                "hiburan" => $request->hiburan,
                "seni" => $request->seni,
                "catering" => $request->catering,
                "foto_pp" => $ft_pp,
                "foto_pw" => $ft_pw,
                "gambar" => "belum",
                "tgl_validasi" => "kosong",
                "tambahan" => $request->tambahan,
                "alasan_batal" => "kosong",
            ]);
            return redirect('/pemesananUser');
        }
        if ($cek != False) {
            echo "<script>alert('Tanggal Pernikahan sudah di pesan, silahkan pesan di tanggal lain');window.location.href='" . $_SERVER['HTTP_REFERER'] . "';</script>";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function lempar(Request $request)
    {
        dd($request->all());
    }
}

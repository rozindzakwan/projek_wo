<?php

namespace App\Http\Controllers;

use App\Models\DetailPemesanan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class detailPemesananControllerAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemesanan = DetailPemesanan::where('pembayaran', '!=', 'ditolak')
            ->where('pembayaran', '!=', 'diterima')
            ->paginate(3);
        return view('admin.pemesanan.index', compact('pemesanan'));
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
        //
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

        $waktu = Carbon::now();
        DetailPemesanan::find($id)->update([
            "pembayaran" => "diterima",
            "tgl_validasi" => $waktu
        ]);
        return redirect('/pemesanan');
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
        $waktu = Carbon::now();
        DetailPemesanan::find($id)->update([
            "pembayaran" => "ditolak",
            "alasan_batal" =>$request->alasan,
            "tgl_validasi" => $waktu
        ]);
        return redirect('/pemesanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $waktu = Carbon::now();
        DetailPemesanan::find($id)->update([
            "pembayaran" => "ditolak",
            "tgl_validasi" => $waktu
        ]);
        return redirect('/pemesanan');
    }
}

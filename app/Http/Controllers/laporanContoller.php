<?php

namespace App\Http\Controllers;

use App\Models\DetailPemesanan;
use Illuminate\Http\Request;

class laporanContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.laporan.index');
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
        $bulan = NULL;
        $tahun = NULL;
        $tamDet = NULL;
        if ($request->bulan && $request->tahun) {
            $tam = DetailPemesanan::where('tgl_validasi', '!=', 'kosong')
                ->whereMonth('tgl_validasi', $request->bulan)
                ->whereYear('tgl_validasi', $request->tahun)
                ->orderBy('paket')
                ->get();
            $tamDet = DetailPemesanan::selectRaw(\DB::raw("COUNT(*) as total, paket"))->where('pembayaran', '=', 'diterima')
                ->whereMonth('tgl_validasi', $request->bulan)
                ->whereYear('tgl_validasi', $request->tahun)
                ->groupBy('paket')
                ->orderBy('paket', 'ASC')
                ->get();
            $bulan = $request->bulan;
            $tahun = $request->tahun;
            $namaBulan = $this->getBulan($bulan);
        } elseif ($request->bulan) {
            $tam = DetailPemesanan::where('tgl_validasi', '!=', 'kosong')
                ->whereMonth('tgl_validasi', $request->bulan)
                ->orderBy('paket')
                ->get();
            $tamDet = DetailPemesanan::selectRaw(\DB::raw("COUNT(*) as total, paket"))->where('pembayaran', '=', 'diterima')
                ->whereMonth('tgl_validasi', $request->bulan)
                ->groupBy('paket')
                ->orderBy('paket', 'ASC')
                ->get();
            $bulan = $request->bulan;
            $namaBulan = $this->getBulan($bulan);
        } elseif ($request->tahun) {
            $tam = DetailPemesanan::where('tgl_validasi', '!=', 'kosong')
                ->whereYear('tgl_validasi', $request->tahun)
                ->orderBy('paket')
                ->get();
            $tamDet = DetailPemesanan::selectRaw(\DB::raw("COUNT(*) as total, paket"))->where('pembayaran', '=', 'diterima')
                ->whereYear('tgl_validasi', $request->tahun)
                ->groupBy('paket')
                ->orderBy('paket', 'ASC')
                ->get();
            $tahun = $request->tahun;
            $namaBulan = NULL;
        } else {
            return redirect('laporan');
        }

        // dd($tam);
        return view('admin.laporan.index', compact('tam', 'bulan', 'tahun', 'namaBulan', 'tamDet'));
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

    public function getBulan($bulan)
    {
        switch ($bulan) {
            case  1:
                return  "Januari";
                break;
            case  2:
                return  "Februari";
                break;
            case  3:
                return  "Maret";
                break;
            case  4:
                return  "April";
                break;
            case  5:
                return  "Mei";
                break;
            case  6:
                return  "Juni";
                break;
            case  7:
                return  "Juli";
                break;
            case  8:
                return  "Agustus";
                break;
            case  9:
                return  "September";
                break;
            case  10:
                return  "Oktober";
                break;
            case  11:
                return  "November";
                break;
            case  12:
                return  "Desember";
                break;
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\DetailPemesanan;
use Illuminate\Http\Request;

class pemesananUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = session()->get('id');
        if ($user == NULL) {
            redirect('/login');
        } else {
            $pemesanan = DetailPemesanan::where('user', $user)->get();
            return view('user.pemesanan.index', compact('pemesanan'));
        }
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
        $id = DetailPemesanan::find($id);
        return view('user.pemesanan.cetak', compact('id'));
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
        $file = $request->file('gambar');
        DetailPemesanan::find($id)->update([
            "gambar" => $file->getClientOriginalName(),
            "pembayaran" => "menunggu"
        ]);
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $file->getClientOriginalName());
        return redirect('/pemesananUser');
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
}

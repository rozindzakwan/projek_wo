<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailPemesanan extends Model
{
    use HasFactory;
    protected $fillable = ["tgl_validasi", "alasan_batal", "tambahan", "pembayaran", "gambar", "paket", "user", "pp", "pw", "tgl_nikah", "tmpt_nikah", "ayah_pp", "ibu_pp", "alamat_pp", "ig_pp", "hp_pp", "ayah_sambung_pp", "ibu_sambung_pp", "ayah_pw", "ibu_pw", "alamat_pw", "ig_pw", "hp_pw", "ayah_sambung_pw", "ibu_sambung_pw", "pembaca_quran", "pidato_penyerahan", "pidato_penerimaan", "saksi_pp", "saksi_pw", "pj_mahar", "ketua_panitia", "jml_rombongan", "make_up", "busana", "dekorasi", "foto", "video", "henna", "tenda", "hiburan", "seni", "catering", "foto_pp", "foto_pw"];

    public function paketF()
    {
        return $this->belongsTo('App\Models\Paket', "paket", "id");
    }
    public function userF()
    {
        return $this->belongsTo('App\Models\User', "user", "id");
    }
}

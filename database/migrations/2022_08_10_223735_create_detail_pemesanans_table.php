<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pemesanans', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('pp');
            $table->string('pw');
            $table->string('tgl_nikah');
            $table->string('tmpt_nikah');
            $table->string('ayah_pp');
            $table->string('ibu_pp');
            $table->string('alamat_pp');
            $table->string('ig_pp')->nullable();
            $table->string('hp_pp');
            $table->string('ayah_sambung_pp')->nullable();
            $table->string('ibu_sambung_pp')->nullable();
            $table->string('ayah_pw');
            $table->string('ibu_pw');
            $table->string('alamat_pw');
            $table->string('ig_pw')->nullable();
            $table->string('hp_pw');
            $table->string('ayah_sambung_pw')->nullable();
            $table->string('ibu_sambung_pw')->nullable();
            $table->string('pembaca_quran');
            $table->string('pidato_penyerahan');
            $table->string('pidato_penerimaan');
            $table->string('saksi_pp');
            $table->string('saksi_pw');
            $table->string('pj_mahar');
            $table->string('ketua_panitia');
            $table->string('jml_rombongan');
            $table->string('make_up')->nullable();
            $table->string('busana')->nullable();
            $table->string('dekorasi')->nullable();
            $table->string('foto')->nullable();
            $table->string('video')->nullable();
            $table->string('henna')->nullable();
            $table->string('tenda')->nullable();
            $table->string('hiburan')->nullable();
            $table->string('seni')->nullable();
            $table->string('catering')->nullable();
            $table->string('foto_pp');
            $table->string('foto_pw');
            $table->string('pembayaran');
            $table->string('paket');
            $table->string('gambar');
            $table->string('tgl_validasi');
            $table->longText('tambahan')->nullable();
            $table->string('alasan_batal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pemesanans');
    }
}

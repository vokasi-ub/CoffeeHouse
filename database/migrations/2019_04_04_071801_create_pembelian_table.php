<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->increments('id_pembelian');
            $table->integer('id_pelanggan');
            $table->integer('id_produk');
            $table->integer('jumlah');
            $table->string('nama_produk', 50);
            $table->integer('harga');
            $table->integer('berat');
            $table->integer('total_berat');
            $table->integer('total_harga');
            $table->integer('id_ongkir');
            $table->date('tanggal_pembelian');
            $table->integer('tarif');
            $table->integer('total_pembelian');
            $table->string('nama_kota', 50);
            $table->text('alamat_pengiriman');
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
        Schema::dropIfExists('pembelian');
    }
}

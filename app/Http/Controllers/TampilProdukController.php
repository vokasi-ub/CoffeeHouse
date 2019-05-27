<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\ProdukModel;
use App\OngkirModel;
use App\PembelianModel;

class TampilProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beans = ProdukModel::where('kategori_produk', 1)->get();
        $alat = ProdukModel::where('kategori_produk', 2)->get();
        return view('tampilProduk.produkFront', compact('beans','alat'));
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
        // insert data ke table pembelian
        $pembelian = new PembelianModel([
            'nama_produk' => $request->nama_produk,
            'nama_pembeli' => $request->nama_pembeli,
            'no_telepon' => $request->no_telepon,
            'harga' => $request->harga,
            'berat' => $request->berat,
            'jumlah' => $request->jumlah,
            'tarif' => $request->tarif,
            'alamat_pengiriman' => $request->alamat_pengiriman,
        ]);

        // alihkan halaman ke halaman kategori
        $pembelian->save();
        return redirect('/tampilProduk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_produk)
    {
        $detail=ProdukModel::find($id_produk);
        return view('detail.detailProduk', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function transaksi($id_produk)
    {
        $ongkir=OngkirModel::all();
        $beli=ProdukModel::find($id_produk);
        return view('beli.beli', compact('beli','ongkir'));
    }

    public function nota()
    {
        return view('nota.nota');
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

    public function getharga($id)
    {
        $tarif = DB::table('ongkir')->where("id_ongkir",$id)->pluck("tarif","id_ongkir");
        return json_encode($tarif);
    }
}

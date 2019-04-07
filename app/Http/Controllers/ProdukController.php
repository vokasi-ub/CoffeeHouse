<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\KategoriModel;
use App\ProdukModel;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk=DB::select("Select * From produk");
        return view('produk.produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = KategoriModel::all();
        return view('produk.tambah_produk', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Upload images
        if($request->hasfile('foto_produk'))
         {

            foreach($request->file('foto_produk') as $file)
            {
                $gambar=$file->getClientOriginalName();
                $file->move(public_path().'/image/', $gambar);  
                $data = $gambar;  
            }
         }

        // insert data ke table kategori
        $produk = new ProdukModel([
            'kategori_produk' => $request->kategori_produk,
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'berat_produk' => $request->berat_produk,
            'foto_produk' => $gambar,
            'deskripsi_produk' => $request->deskripsi_produk,

        ]);
        // alihkan halaman ke halaman kategori
        $produk->save();
        return redirect('/produk');

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
    public function edit($id_produk)
    {
        $kategori = KategoriModel::all();
        $produk=ProdukModel::find($id_produk);
        return view('produk.edit', compact('produk', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_produk)
    {
        //Upload images
        if($request->hasfile('foto_produk'))
         {

            foreach($request->file('foto_produk') as $file)
            {
                $gambar=$file->getClientOriginalName();
                $file->move(public_path().'/image/', $gambar);  
                $data = $gambar;  
            }
         }
            $produk = ProdukModel::find($id_produk);
            $produk->kategori_produk = $request->get('kategori_produk');
            $produk->nama_produk = $request->get('nama_produk');
            $produk->harga_produk = $request->get('harga_produk');
            $produk->berat_produk = $request->get('berat_produk');
            $produk->foto_produk = $gambar;
            $produk->deskripsi_produk = $request->get('deskripsi_produk');
            $produk->save();

        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_produk)
    {
        DB::table('produk')->where('id_produk', $id_produk)->delete();
            return redirect('/produk');
    }
}

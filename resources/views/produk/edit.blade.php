@extends('layouts.master')

@section('content')

<h2>Tambah Produk</h2>

<form method="post" action="{{ route('produk.update', $produk->id_produk)}}" enctype="multipart/form-data">
@method('PATCH')
        @csrf
    <div class="form-group">
        <label>Kategori</label>
      <select name="kategori_produk" class="form-control">
        @foreach ($kategori as $kategori)
				<?php if($kategori->id_kategori == $produk->kategori_produk){ ?>
			<option selected="selected" value="{{ $kategori->id_kategori }}"> {{ $kategori->nama_kategori }}</option>
				<?php } else { ?> 
			<option value="{{ $kategori->id_kategori }}"> {{ $kategori->nama_kategori }}</option>	
				<?php } ?>
				@endforeach
	  </select>
    </div>

	<div class="form-group">
		<label>Nama</label>
		<input type="text"  class="form-control" name="nama_produk" value="{{ $produk->nama_produk }}">
	</div>   

	<div class="form-group">
		<label>Harga (Rp)</label>
		<input type="number" class="form-control" name="harga_produk" value="{{ $produk->harga_produk }}">
	</div>

	<div class="form-group">
		<label>Berat (gr)</label>
		<input type="number" class="form-control" name="berat_produk" value="{{ $produk->berat_produk }}">
	</div>

	<div class="form-group">
		<label>Foto</label><br>
        <img src="{{asset('/image/'. $produk->foto_produk)}}" width="20%">
		<input type="file" class="form-control" name="foto_produk[]">
	</div>

	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi_produk" rows="10">{{ $produk->deskripsi_produk }}</textarea>
	</div>

	<button class="btn btn-primary" type="submit">Simpan</button>
</form>

@endsection
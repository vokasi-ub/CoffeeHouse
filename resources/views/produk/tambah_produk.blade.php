@extends('layouts.master')

@section('content')

<h2>Tambah Produk</h2>

<form method="post" action="{{ route('produk.store')}}" enctype="multipart/form-data">
{{ csrf_field() }}
    <div class="form-group">
        <label>Kategori</label>
      <select name="kategori_produk" class="form-control">
        @foreach ($kategori as $kategori)
			<option value="{{ $kategori->id_kategori }}"> {{ $kategori->nama_kategori }}</option>
		@endforeach
	  </select>
    </div>

	<div class="form-group">
		<label>Nama</label>
		<input type="text"  class="form-control" name="nama_produk">
	</div>   

	<div class="form-group">
		<label>Harga (Rp)</label>
		<input type="number" class="form-control" name="harga_produk">
	</div>

	<div class="form-group">
		<label>Berat (gr)</label>
		<input type="number" class="form-control" name="berat_produk">
	</div>

	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto_produk[]">
	</div>

	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi_produk" rows="10"></textarea>
	</div>

	<button class="btn btn-primary" type="submit">Simpan</button>
</form>

@endsection
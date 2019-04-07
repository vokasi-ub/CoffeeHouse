@extends('layouts.master')

@section('content')

<h2>Edit Kategori</h2>

<form method="post" action="{{ route('kategori.update', $kategori->id_kategori)}}">
@method('PATCH')
        @csrf
	<div class="form-group">
		<label>ID Kategori</label>
		<input type="number"  class="form-control" name="id_kategori" value="{{ $kategori->id_kategori }}">
	</div>   

	<div class="form-group">
		<label>Nama Kategori</label>
		<input type="text" class="form-control" name="nama_kategori" value="{{ $kategori->nama_kategori }}">
	</div>

	<button class="btn btn-primary" type="submit">Simpan</button>
</form>

@endsection
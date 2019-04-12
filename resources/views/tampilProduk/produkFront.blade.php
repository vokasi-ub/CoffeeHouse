@extends('layoutsFrontEnd.index')

@section('content')

<!-- Produk Kopi -->
<div class="kolom10"><br>
		<div class="majalah">COFFEE BEANS</div>
	</div>

<!-- Kanan -->
	<div class="kolom1" style="border: 1px solid white"></div>
<!-- Produk Kopi -->
<br>
	<div class="kolom10">
    @foreach($beans as $biji)
		<div class="kolom3">
			<img src="{{asset('/image/'. $biji->foto_produk)}}" width="100%">
			<center>
				<p style="font-family: segoe ui">{{ $biji->nama_produk }}</p>
				<p style="font-family: segoe ui; color:#e74c3c">Rp. {{ number_format($biji->harga_produk) }}</p>
				<a href="{{ route('detailProduk.show', $biji->id_produk)}}" style="color: white;">
					<button class="button" style="vertical-align:middle; font-size: 15px;"><span>Detail</span></button>
				</a>
				<a href="/transaksi/{{$biji->id_produk}}" style="color: white;">
					<button class="button" style="vertical-align:middle; font-size: 15px; background:#2980b9;"><span>Beli</span></button>
				</a>
			</center>
		</div>
    @endforeach
	</div>

<!-- Kanan -->
<div class="kolom1" style="border: 1px solid white; height: 800px"></div>

<!-- Kiri -->
	<div class="kolom1" style="border: 1px solid white; height: 100px"></div>

<!-- Produk Alat Seduh -->
	<div class="kolom10"><br>
		<div class="majalah">ALAT SEDUH</div>
	</div>

<!-- Produk Alat -->
<br>
	<div class="kolom10">
    @foreach($alat as $alat)
		<div class="kolom3">
			<img src="{{asset('/image/'. $alat->foto_produk)}}" width="100%">
			<center>
				<p style="font-family: segoe ui">{{ $alat->nama_produk }}</p>
				<p style="font-family: segoe ui; color:#e74c3c">Rp. {{ number_format($alat->harga_produk) }}</p>
				<a href="{{ route('detailProduk.show', $alat->id_produk)}}" style="color: white;">
					<button class="button" style="vertical-align:middle; font-size: 15px;" width="50%"><span>Detail</span></button>
				</a>
				<a href="/transaksi/ {{$alat->id_produk}}" style="color: white;">
					<button class="button" style="vertical-align:middle; font-size: 15px; background:#2980b9;"><span>Beli</span></button>
				</a>
			</center>
		</div>
    @endforeach    
	</div>

@endsection
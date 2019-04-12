<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/assets/img/logo3.png') }}">
	<title>Coffee-House</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assetsFront/css/style.css') }}">
</head>
<body>
<!-- Logo -->
<div class="kolom12" style="background-color: #ecf0f1; padding-top: 2px;">
	<center><img src="{{ asset('assetsFront/image/logo3.png') }}" width="9%"></center>
</div>

<!-- Navbar -->
<div class="kolom12">
    <center>
        <ul style="float: left; margin-left: 450px;">
            <li><a href="#tentang">Tentang</a></li>
            <li><a href="{{url('tampilProduk')}}">Beli</a></li>
            <!--<li><a href="">Login</a></li>-->
            <li><a href="{{url('tampilProduk')}}">Beranda</a></li>
        </ul>
	</center>
</div>

<!-- Bawah Navbar -->
<div class="kolom12" style="border: 1px solid white"></div>

<!-- Main Image -->
	<div class="kolom12">
			<center>
				<img src="{{ asset('assetsFront/image/banner.jpg') }}"" width="100%">
			</center>
	</div>

<!-- Bawah Main Image -->
	<div class="kolom12" style="border: 1px solid white"><br></div>

<!-- Kiri -->
	<div class="kolom1" style="border: 1px solid white; height: 300px"></div>

@yield('content')

<!-- Gambar -->
<div class="kolom12"><br><br><br>
	<center>
		<img src="{{ asset('assetsFront/image/image1.jpg') }}" width="50%"><br>
	</center>
</div>

<!-- Follow -->
<div class="kolom12">
	<p style="font-family: segoe ui; text-align: center; color: #ccae62">Follow Our Instagram <a href="https://www.instagram.com/?hl=id" style=" color: #ccae62;">@CoffeeHouse</a></p>
</div>

<!-- Kiri -->
	<div class="kolom1" style="border: 1px solid white; height: 100px"></div>
<!-- Kiri -->
	
<!-- Batas Gambar -->
<div class="kolom10"><br>
	<img src="{{ asset('assetsFront/image/image2.jpg') }}" width="100%">
</div>


<!-- Kontak -->
<div class="kolom12"><br>
	<div class="kolom4">
		<div class="box">
			<font style="font-family: segoe ui; text-align: center; font-size: 15px;">
				<br><br><br><br><br><br><br>
				<a href="#"><p style=" color: #7f8c8d;">HOME</p></a>
				<a href="#"><p style=" color: #7f8c8d;">TENTANG KAMI</p></a>
				<a href="#"><p style=" color: #7f8c8d;">SHOP</p></a>
			</font>
		</div>
	</div>
	<div class="kolom4">
		<div class="box" style="border-left: none; border-right: none;">
			<center>
				<br><br>
				<img src="{{ asset('assetsFront/image/logo3.png') }}" width="50%">
				<font style="font-family: segoe ui; text-align: center; color: #7f8c8d;">
					<p>Artikel, Berita, Tutorial Kopi</p>
					<p style="font-size: 12px">FOLLOW US ON</p>
					<a href="#"><img src="{{ asset('assetsFront/image/facebook.png') }}"></a>
					<a href="#"><img src="{{ asset('assetsFront/image/twitter.png') }}"></a>
					<a href="#"><img src="{{ asset('assetsFront/image/instagram.png') }}"></a>
					<a href="#"><img src="{{ asset('assetsFront/image/youtube.png') }}"></a>
				</font>
			</center>
		</div>
	</div>
	<div class="kolom4">
		<div class="box">
			<center><br>
				<img src="{{ asset('assetsFront/image/poster.jpg') }}" width="65%">
			</center>
		</div>
	</div>


<!-- Footer -->
<div class="kolom12">
<div class="footer" id="tentang" style="border-top: none;"><br>
		<p style="font-family: segoe ui; font-size: 10px; text-align: center; color: #636e72;">Copyright &copy;2019, Coffee-House. All Rights Reserved.</p>
</div>
</div>
</div>
</body>
</html>
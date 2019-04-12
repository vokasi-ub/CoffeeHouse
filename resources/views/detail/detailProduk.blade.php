<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/assets/img/logo3.png') }}">
	<title>Coffee-House</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsFront/css/style.css') }}">
  <style type="text/css">
     input[type=number], select {
          width: 20%;
          padding: 7px 7px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
      }
      .box1{
        height: 500px;
        background: white;
        padding: 10px;
        box-shadow: 7px 7px 20px #bdc3c7;
      }
      .boxharga{
        width: 100%;
        background: #95a5a6;
        font-color: white;
      }
      textarea {
        width: 100%;
        height: 70px;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        resize: none;
      }
  </style>
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

<!-- Detail Image-->
<div class="kolom12" style="padding: 10px;">
<center>
	<div class="kolom6" style="padding: 20px;">
        <div class="box1" style="padding: 20px; margin-top: center;">
            <img src="{{asset('/image/'. $detail->foto_produk)}}" width="70%">
        </div>
    </div>
</center>
<!-- Detail Produk-->
	<div class="kolom6" style="font-family: segoe ui; text-align: left; padding: 20px;">
        <div class="box1" style="padding: 20px;">
            <div class="majalah" style="text-align: left;">
                <p style="font-size: 30px;">{{ $detail->nama_produk }}</p><br>
            </div>
            <p>{{ $detail->deskripsi_produk }}</p>
            <p style="font-size: 25px;">Rp. {{ number_format($detail->harga_produk) }}</p>
            <!--<a href="{{ url('beli') }}">
              <button class="button" name="beli" style="vertical-align:middle; font-size: 15px;">Beli</button>
            </a>-->
        </div> 
    </div>
</div>
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
<div class="kolom12" id="tentang"><br>
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
<div class="footer" style="border-top: none;"><br>
		<p style="font-family: segoe ui; font-size: 10px; text-align: center; color: #636e72;">Copyright &copy;2019, Coffee-House. All Rights Reserved.</p>
</div>
</div>
</div>
</body>
</html>
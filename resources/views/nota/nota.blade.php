<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/assets/img/logo3.png') }}">
	<title>Coffee-House</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsFront/css/style.css') }}">
<style type="text/css">
input[type=text], select {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 30%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
</style>
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

<!-- Nota pembelian -->
<!-- Kanan -->
<div class="kolom1" style="border: 1px solid white"></div>

<div class="kolom10" style="font-family: segoe ui;">
  <h2>Detail Pembelian</h2>

<!--<table border="1px solid black" style="border-collapse: collapse; width: 100%;">
  <div class="kolom4">
    <h3>Pembelian</h3>
    <strong>No. Pembelian : </strong><br>
    Tanggal : <br>
    Total : Rp.
  </div>
  <div class="kolom4">
    <h3>Pelanggan</h3>
    <strong>nama_pelanggan</strong><br>
      telepon_pelanggan<br>
      email_pelanggan
  </div>
  <div class="kolom4">
    <h3>Pengiriman</h3>
    <strong>nama_kota</strong><br>
    alamat_pengiriman<br>
    Ongkos Kirim : <b>Rp. tarif</b>
  </div>
</table><br>-->

<table border="1px solid black" style="border-collapse: collapse; width: 100%;">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Produk</th>
      <th>Harga</th>
      <th>Berat</th>
      <th>Jumlah</th>
      <th>Total Berat</th>
      <th>Total Harga</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td>nama</td>
      <td>Rp. harga</td>
      <td>berat gr</td>
      <td>jumlah</td>
      <td>subberat gr</td>
      <td>Rp. subharga</td>
    </tr>
    <tr>
        <td colspan="6" style="text-align: center;">Ongkos Kirim</td>
        <td>Rp. tarif</td>
    </tr>
    <tr>
        <td colspan="6" style="text-align: center;">Total Bayar</td>
        <td><b>Rp. total_pembelian</b></td>
    </tr>
    
    
  </tbody>
</table>

<p>
  Silahkan melakukan pembayaran <b>Rp. total_pembelian </b>Ke <br>
  <strong>BANK BNI 111-00012343-2341 AN. COFFEE HOUSE</strong>
</p>
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
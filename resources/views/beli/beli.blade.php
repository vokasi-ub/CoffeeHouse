<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/assets/img/logo3.png') }}">
  <title>Coffee-House</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assetsFront/css/style.css') }}">
    <style type="text/css">
      input[type=text], select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
      }

      input[type=submit] {
          width: 100%;
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

<!-- Kiri -->
<div class="kolom1" style="border: 1px solid white; height: 100px"></div>
<div class="kolom10">
<h1 style="font-family: segoe ui">Form Pembelian</h1>
<hr>
<form method="post" action="{{ route('beli.store')}}" >
  @csrf
  <br>
  <div class="form-group">
		<label style="font-family: segoe ui"><b>Nama Produk</b></label><br>
		<input type="text" readonly value="{{ $beli->nama_produk }}" class="form-control" name="nama_produk">
	</div><br>
  <div class="form-group">
		<label style="font-family: segoe ui"><b>Harga Produk</b></label><br>
		<input type="text" id="produk" readonly value="{{ $beli->harga_produk }}" class="form-control" name="harga">
	</div><br>  
  <div class="form-group">
		<label style="font-family: segoe ui"><b>Berat Produk</b></label><br>
		<input type="text" readonly value="{{ $beli->berat_produk }}" class="form-control" name="berat">
	</div><br>
  <div class="form-group">
		<label style="font-family: segoe ui"><b>Jumlah Produk</b></label><br>
		<input type="text" readonly value="1" class="form-control" name="jumlah">
	</div><br>    
  <div class="form-group">
  <label style="font-family: segoe ui"><b>Identitas Pembeli</b></label><br>
    <div class="kolom6">
      <input type="text" style="width: 80%" name="nama_pembeli" placeholder="Masukkan Nama">
    </div>
    <div class="kolom6">
    <input type="text" type="number" style="width: 80%" name="no_telepon" placeholder="Masukkan Nomor Telepon">
    <input type="hidden" name="id_produk" value="{{$beli->id_produk}}">
    </div><br><br>
    <br><br>   
    <div class="form-group">
    <label style="font-family: segoe ui"><b>Ongkir</b></label><br>
      <select style="width: 80%;" id="tarif" name="tarif">
        <option name="id_ongkir">Pilih Ongkos Kirim</option>
        @foreach ($ongkir as $ongkir)
			<option value="{{ $ongkir->id_ongkir }}"> {{ $ongkir->nama_kota }} - Rp. {{ number_format($ongkir-> tarif) }}</option>
		@endforeach
      </select>
    </div>

    <!--<select style="width: 80%;" id="harga" name="harga" ></select>-->

    <div class="kolom12"><br>
      <label style="font-family: segoe ui"><b>Alamat Pengiriman</b></label><br><br>
      <textarea name="alamat_pengiriman" placeholder="Masukkan Alamat Lengkap Pengiriman" name="alamat_pengiriman"></textarea>
    </div>
    
    <!--<div class="kolom12"><br>
      <label style="font-family: segoe ui"><b>Total Pembelian</b></label><br>
      <input type="text" id="total" name="total_pembelian" readonly>
    </div>-->
    

  <div class="kolom12">
      <br><button onClick="return confirm('Kirim Pesanan Anda')" class="button" type="submit" style="vertical-align:middle; font-size: 16px;"><span>Checkout</span></button><br>
  </div>
  </form>
 </div>    
 </div>

 <!--<script type="text/javascript">
    jQuery(document).ready(function ()
    {
            jQuery('select[name="tarif"]').on('change',function(){
               var tarifID = jQuery(this).val();
               if(tarifID)
               {
                  jQuery.ajax({
                     url : '/getharga/' +tarifID,
                     type : "GET",
                     dataType : "json",
                     success:function(data)
                     {
                        console.log(data);
                        jQuery('select[name="harga"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="harga"]').append('<option value="'+ value +'">'+ value +'</option>');
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="harga"]').empty();
               }
            });
    });
</script>
<script type="text/javascript">
function cal(){
        if(document.getElementById("tarif")){
            document.getElementById("total").value= document.getElementById("produk").value + document.getElementById("produk").value;
        }  
    }

    </script>-->

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
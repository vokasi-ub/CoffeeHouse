@extends('layouts.master')

@section('content')

<section class="content">
<h2>Data Pembelian</h2>
<br>
<div class="box box-info">
  <form action="" method="GET">
    <div class="box-body">
      <div class="row">
        <div class="col-xs-5">
          <div class="input-group">
            <input type="text" class="form-control" name="keyword" placeholder="Search">
            <div class="input-group-btn">
              <button type="submit" class="btn btn-info">Search</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

 <div class="box-body">
  <!--<a href="{{url('produk/create')}}">
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
      Tambah Data
    </button>
  </a>-->
    <br><br>
   
<table class="table table-bordered">

<thead>
        <tr>
            <td>No</td>
            <td>Nama Pelanggan</td>
            <td>Nama Produk</td>
            <td>Tarif Ongkir</td>
            <td>Total Pembelian</td>
        </tr>
        </thead>
        <tbody>
@foreach ($pembelian as $nomor => $pembelian)
        <tr>
            <td>{{ $nomor+1 }}</td>
            <td>{{ $pembelian->nama_pembeli }}</td>
            <td>{{ $pembelian->nama_produk }}</td>
            <td>Rp. {{ number_format($pembelian->harga) }}</td>
            <td>
                <a href="" class="btn btn-info">Detail</a>
            </td>    
        </tr> 
        @endforeach
        </tbody>
        </table>
        
            </div>
            <!-- /.box-body -->
          </div>
        </section>

@endsection
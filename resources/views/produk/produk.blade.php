@extends('layouts.master')

@section('content')

<section class="content">
<h2>Data Produk</h2>
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
  <a href="{{url('produk/create')}}">
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
      Tambah Data
    </button>
  </a>
    <br><br>
              <!-- /.box-footer -->
            </form>
              </div>
            
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
<table class="table table-bordered">

<thead>
        <tr>
            <td>No</td>
            <td>Kategori Produk</td>
            <td>Nama Produk</td>
            <td>Harga Produk</td>
            <td>Berat Produk</td>
            <td>Foto Produk</td>
            <td>Deskripsi</td>
            <td>Aksi</td>
        </tr>
        </thead>
        <tbody>
@foreach ($produk as $nomor => $produk)
        <tr>
            <td>{{ $nomor+1 }}</td>
            <td>{{ $produk->kategori_produk }}</td>
            <td>{{ $produk->nama_produk }}</td>
            <td>Rp. {{ number_format($produk->harga_produk) }}</td>
            <td>{{ $produk->berat_produk }} gr</td>
            <td><img src="{{asset('/image/'. $produk->foto_produk)}}" width="50px" heigth="50px"></td>
            <td>{{ $produk->deskripsi_produk }}</td>
            <td>
                <a href="{{ route('produk.edit', $produk->id_produk)}}" class="btn btn-info">Edit</a>
                <form action="{{ route('produk.destroy', $produk->id_produk)}}" method="post" style="float: right;">
                  {{ csrf_field() }} @method('DELETE')
                  <button onClick="return confirm('Yakin Menghapus ?')"type="submit" class="btn btn-danger">Hapus</button>
                </form>
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
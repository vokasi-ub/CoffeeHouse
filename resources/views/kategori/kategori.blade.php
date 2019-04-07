@extends('layouts.master')

@section('content')

<section class="content">
<h2>Data Kategori</h2>
<br>
<!--<div class="box box-info">
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
  </form>-->

 <div class="box-body">
  <a href="{{url('kategori/create')}}">
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
            <td>ID Kategori</td>
            <td>Nama Kategori</td>
            <td>Aksi</td>
        </tr>
        </thead>
        <tbody>
@foreach ($kategori as $nomor => $kategori)
        <tr>
            <td>{{ $nomor+1 }}</td>
            <td>{{ $kategori->id_kategori }}</td>
            <td>{{ $kategori->nama_kategori }}</td>
            <td width="20%"><a href="{{ route('kategori.edit', $kategori->id_kategori)}}" class="btn btn-info">Edit</a>
                <form action="{{ route('kategori.destroy', $kategori->id_kategori)}}" method="post" style="float: right;">
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
@extends('layouts.master')

@section('content')

<section class="content">
<h2>Data Pelanggan</h2>
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
  <!--<a href="">
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
      Tambah Data
    </button>
  </a>
    <br><br>-->
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
            <td>Nama Pelanggan</td>
            <td>Email</td>
            <td>No Telepon</td>
            <td>Aksi</td>
        </tr>
        </thead>
        <tbody>
@foreach ($pelanggan as $nomor => $pelanggan)
        <tr>
            <td>{{ $nomor+1 }}</td>
            <td>{{ $pelanggan->nama_pelanggan }}</td>
            <td>{{ $pelanggan->email_pelanggan }}</td>
            <td>{{ $pelanggan->telepon_pelanggan }}</td>
            <td>
                <!--<a href="" class="btn btn-info">Edit</a>-->
                <form action="{{ route('pelanggan.destroy', $pelanggan->id_pelanggan)}}" method="post">
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
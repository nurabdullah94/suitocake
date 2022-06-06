@extends('layouts.adminmaster')
@section('title')
  Ubah Produk
@endsection
@section('produk')
active
@endsection
@section('css')
  <!-- DataTables -->
<link rel="stylesheet" href="{{asset('theme/admin')}}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection
@section('js')
  <!-- DataTables -->
  <script src="{{asset('theme/admin')}}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="{{asset('theme/admin')}}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script>
    $(function () {
      $('#example1').DataTable()
    })
  </script>
@endsection
@section('konten')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ubah Produk
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-th"></i> Dashboard</a></li>
        <li><a href="{{route('admin.produk')}}">Produk</a></li>
        <li class="active">Ubah Produk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Data Kue</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('admin.produk.update', $produk->id)}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Input Gambar</label>
                  <input type="file" name="gambar" id="exampleInputFile">
                </div>
                <div class="form-group">
                  <label>Nama Produk</label>
                  <input type="text" name="nama_produk" class="form-control" placeholder="Nama produk" value="{{$produk->nama_produk}}" required>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Harga Kue</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          Rp.
                        </div>
                        <input type="text" name="harga" class="form-control" placeholder="0000000" value="{{$produk->harga}}" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Kategori Produk</label>
                      <select class="form-control" name="kategoriproduk_id" required>
                        @foreach ($kategori as $data)
                          <option value="{{$data->id}}" {{ $data->id == $produk->kategoriproduk_id ? 'selected' : '' }}>{{$data->kategori}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Stok Barang</label>
                      <input type="text" name="stok" class="form-control" placeholder="0" value="{{$produk->stok}}" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea name="keterangan" class="form-control" rows="8" cols="80" placeholder="Masukkan keterangan produk disini..." required>{{$produk->keterangan}}</textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection

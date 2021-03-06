@extends('layouts.adminmaster')
@section('title')
  Tambah Blog
@endsection
@section('blog')
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
        Tambah Blog
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-th"></i> Dashboard</a></li>
        <li><a href="{{route('admin.blog')}}">Blog</a></li>
        <li class="active">Tambah Blog</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Blog</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('admin.blog.post')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Input Gambar</label>
                  <input type="file" name="gambar" id="exampleInputFile" required>
                </div>
                <div class="form-group">
                  <label>Judul</label>
                  <input type="text" name="judul" class="form-control" placeholder="Nama produk" required>
                </div>
                <div class="form-group">
                  <label>Konten</label>
                  <textarea name="konten" class="form-control" rows="8" cols="80" placeholder="Masukkan keterangan produk disini..." required></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
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

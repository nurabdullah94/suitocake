@extends('layouts.adminmaster')
@section('title')
  Produk
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
        Produk
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-th"></i> Dashboard</a></li>
        <li class="active">Produk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Tabel Produk</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                  <i class="fa fa-plus"></i> Tambah Kategori
                </button>
                <a class="btn btn-success" href="{{route('admin.produk.create')}}"><i class="fa fa-plus"></i> Tambah Data</a>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="modal fade" id="modal-default">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Kategori Produk</h4>
                  </div>
                  <div class="modal-body">
                    <form class="" action="index.html" method="post">
                      <div class="form-group">
                        <label>Kategori Produk</label>
                        <input type="text" name="kategori" class="form-control" placeholder="Kategori Produk" required>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-default" type="submit" name="button">Tambah</button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width:20px;">No.</th>
                  <th>Judul</th>
                  <th>Konten</th>
                  <th>Posted</th>
                  <th style="width:105px;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Cara Membuat Makan Sehat yang mudah dirumah dan bergizi</td>
                  <td>Win 95+</td>
                  <td>12/05/2022</td>
                  <td>
                    <form class="" action="" method="post">
                      <a class="btn btn-sm btn-warning" href="{{route('admin.produk.edit')}}"><i class="fa fa-pencil"></i> </a>
                      <button class="btn btn-sm btn-danger" type="submit" name="button">
                        <i class="fa fa-trash"></i>
                      </button>
                    </form>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

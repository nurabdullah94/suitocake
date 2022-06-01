@extends('layouts.adminmaster')
@section('title')
  Blog
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
        Blog
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-th"></i> Dashboard</a></li>
        <li class="active">Blog</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Tabel Blog</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <a class="btn btn-success" href="{{route('admin.blog.create')}}"><i class="fa fa-plus"></i> Tambah Data</a>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
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
                  <td>Cara Membuat Makan Sehat yang mudah dirumah</td>
                  <td>Win 95+</td>
                  <td>12/05/2022</td>
                  <td>
                    <form class="" action="" method="post">
                      <a class="btn btn-sm btn-warning" href="{{route('admin.blog.edit')}}"><i class="fa fa-pencil"></i> </a>
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

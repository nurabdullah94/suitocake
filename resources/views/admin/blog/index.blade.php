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
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($blog as $data)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$data->judul}}</td>
                      <td>{!!str_limit($data->konten,90)!!}</td>
                      <td>{{$data->created_at}}</td>
                      <td>
                        <form method="POST" action="{{route('admin.blog.delete', $data->id)}}" accept-charset="UTF-8">
                          <input name="_method" type="hidden" value="DELETE">
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                          <a class="btn btn-sm btn-warning" style="padding: 1px 5px;" href="{{route('admin.blog.edit', $data->id)}}"><i class="fa fa-pencil"></i> </a>
                          <button class="btn btn-danger btn-sm" style="padding: 1px 5px;" onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
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

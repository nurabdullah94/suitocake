@extends('layouts.master')
@section('title')
Blog
@endsection
@section('blog')
active
@endsection
@section('navbar')
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background:black;">
      <div class="container px-4 px-lg-5">
          <a class="navbar-brand" href="{{'/'}}">SuitoCake</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item"><a class="nav-link @yield('home')" href="{{'/'}}">Home</a></li>
                  <li class="nav-item"><a class="nav-link @yield('produk')" href="{{route('produk')}}">Produk</a></li>
                  <li class="nav-item"><a class="nav-link @yield('blog')" href="{{route('blog')}}">Blog</a></li>
                  <li class="nav-item"><a class="nav-link @yield('kontak')" href="{{route('kontak')}}">Kontak</a></li>
              </ul>
          </div>
      </div>
  </nav>
@endsection
@section('konten')
  <div class="col-md-12 grey darken-4" style="height:90px;"></div>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- Blog Entries Column -->
      <div class="col-md-10">
        <h1 class="my-4">Blog
          <small>Makanan</small>
        </h1>
        @foreach ($blogs as $data)
        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="{{ asset('source/blog')}}/{{$data->gambar}}" style="height:460px;" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">{{($data->judul)}}</h2>
            <p class="card-text">{!!str_limit($data->konten,300)!!}</p>
            <a href="{{route("blog.show",$data->slug)}}" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on {{($data->created_at->toFormattedDateString())}}
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <!-- /.row -->
  </div>

@endsection

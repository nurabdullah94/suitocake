@extends('layouts.master')
@section('title')
Produk
@endsection
@section('produk')
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
        <div class="col-lg-3">
          <div class="mb-5">
            <h4 class="fst-italic">Kategori Produk</h4>
            <ol class="list-unstyled mb-0">
              @foreach ($kategories as $data)
                <li><a href="#">{{$data->kategori}}</a></li>
              @endforeach
            </ol>
          </div>
          <div class="">
            <h4 class="fst-italic">Cara pemesanan</h4>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Lihat disini
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cara pemesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    -Untuk sementara pemesanan bisa dilakukan menggunakan media Whatsapp,
                    <br>
                    -Tampilan pada produk hanya melihat ketersediaan produk yang tersedia,
                    <br>
                    -Pemesanan untuk acara besar bisa dilakukan 1 bulan sebelum hari h
                    <br>
                    -Untuk pemesanan partai di usahakan untuk membayar DP 40%-50% dari total
                    <br>
                    <br>
                    Whatsapp : 08912345678
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">
          <div id="myCarousel" class="carousel slide mb-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="bd-placeholder-img" width="100%" height="300px" src="{{asset('source')}}/1.jpg" alt="">
                <div class="container">
                  <div class="carousel-caption text-start">
                    {{-- <h1>Example headline.</h1>
                    <p>Some representative placeholder content for the first slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> --}}
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="300px" src="{{asset('source')}}/2.jpeg" alt="">
                <div class="container">
                  <div class="carousel-caption">
                    {{-- <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> --}}
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="300px" src="{{asset('source')}}/3.jpg" alt="">
                <div class="container">
                  <div class="carousel-caption text-end">
                    {{-- <h1>One more for good measure.</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p> --}}
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <div class="row">
            @foreach ($produks as $data)
              <div class="col-lg-4 mb-4">
                <div class="card shadow-sm">
                  <img src="{{asset('source/produk')}}/{{$data->gambar}}" style="height:175px;" alt="">

                  <div class="card-body">
                    <p class="card-text">{{$data->nama_produk}} <br> <small class="text-muted">Kategori: {{$data->kategoriproduk->kategori}}</small></p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a class="btn btn-sm btn-outline-secondary" href="{{route('produk.show', $data->slug)}}">Lihat</a>
                      </div>

                      <small class="text-muted">{{$data->stok}} Stok</small>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </div>
    <!-- /.Isi Modal -->
  @endsection

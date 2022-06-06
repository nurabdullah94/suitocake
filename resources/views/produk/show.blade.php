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
          <div class="row">
            <div class="col-lg-4">
              <img class="bd-placeholder-img" width="100%" height="250px" src="{{asset('source/produk')}}/{{$produk->gambar}}" alt="">
            </div>
            <div class="col-lg-6">
              <h2>{{$produk->nama_produk}}</h2>
              <hr>
              <small>Kategori :{{$produk->kategoriproduk->kategori}}</small>
              <br>

              <hr>
              <small>Rp {{$produk->harga}}</small> <small>Stok : {{$produk->stok}}</small>
              <hr>
              <p>
                {{$produk->keterangan}}
              </p>
            </div>
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

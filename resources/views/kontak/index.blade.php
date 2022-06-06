@extends('layouts.master')
@section('title')
Kontak
@endsection
@section('kontak')
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
<hr>
<div class="container">
  <div class="row">
    <div class="col-lg-8 mx-auto text-center">
      <h2 class="section-heading">Terima kasih atas kepercayaan anda membeli di toko kami, mohon maaf untuk ketidak nyamannya dalam pembelian di web kami, Website ini dalam tahap pengembangan</h2>
      <hr class="my-4">
      <h4 class="section-heading">Ada pertanyaan ?</h4>
      <p class="mb-5">Bisa langsung kontak beberapa pilihan berikut</p>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4 ml-auto text-center">
      <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
      <p>+62-896-394-25290</p>
    </div>

    <div class="col-lg-4 mr-auto text-center">
      <img src="{{asset("/img/mail.png")}}" height="60px" alt="Whatsapp">
      <p>
        <a href="mailto:suitocake@gmail.com">Suitocake@gmail.com</a>
      </p>
    </div>
    <div class="col-lg-4 ml-auto text-center">
      <img src="{{asset("/img/wa.png")}}" height="60px" alt="Whatsapp">
      <p>+62-896-394-25290</p>
    </div>
  </div>
</div>
<hr>
<div class="col-lg-8 mx-auto text-center">
  <h2 class="section-heading">Cek Map Toko Kami</h2>
</div>
{{-- Maps --}}
<section class="map">
  <iframe width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3963.496582744695!2d106.76095096560672!3d-6.585024554740698!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe514a8633c6f9acb!2sWarung+Samsu!5e0!3m2!1sen!2sid!4v1534292025477" ></iframe>
</section>

@endsection

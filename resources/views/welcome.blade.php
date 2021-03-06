@extends('layouts.master')
@section('title')
Selamat Datang
@endsection
@section('home')
active
@endsection
@section('navbar')
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
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
  <!-- Masthead-->
  <header class="masthead" style="background-image:url({{asset('source')}}/pexels-emma-jones-793269.jpg)">
      <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
          <div class="d-flex justify-content-center">
              <div class="text-center">
                  <h1 class="mx-auto my-0 text-uppercase" style="background-color:white;">Selamat Datang di SuitoCake</h1>
                  <h2 class="text-white mx-auto mt-2 mb-5">Kami menjual aneka kue tradisional</h2>
                  <a class="btn btn-primary" href="{{route('produk')}}">Lihat Produk</a>
              </div>
          </div>
      </div>
  </header>

@endsection

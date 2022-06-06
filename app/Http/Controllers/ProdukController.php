<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Kategoriproduk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
      $produks = Produk::all();
      $kategories = Kategoriproduk::all();
      return view('produk.index', compact('produks', 'kategories'));
    }

    public function show($slug)
    {
      $produk = Produk::where('slug', $slug)->first();
      $kategories = Kategoriproduk::all();
      return view('produk.show', compact('produk', 'kategories'));
    }
}

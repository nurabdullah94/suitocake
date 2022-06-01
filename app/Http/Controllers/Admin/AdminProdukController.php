<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminProdukController extends Controller
{
    public function index()
    {
      return view('admin.produk.index');
    }

    public function create()
    {
      return view('admin.produk.create');
    }

    public function edit()
    {
      return view('admin.produk.edit');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBlogController extends Controller
{
    public function index()
    {
      return view('admin.blog.index');
    }

    public function create()
    {
      return view('admin.blog.create');
    }

    public function edit()
    {
      return view('admin.blog.edit');
    }
}

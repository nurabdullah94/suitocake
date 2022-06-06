<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
      $blogs = Blog::all();
      return view('blog.index',compact('blogs'));
    }

    public function show($slug)
    {
      $blog = Blog::where('slug', $slug)->first();
      return view('blog.show', compact('blog'));
    }
}

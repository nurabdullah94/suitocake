<?php

namespace App\Http\Controllers\Admin;

use DB;
use Storage;
use Illuminate\Support\Facades\File;
use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBlogController extends Controller
{
    public function index()
    {
      $blog = Blog::all();
      return view('admin.blog.index', compact('blog'));
    }

    public function create()
    {
      return view('admin.blog.create');
    }

    public function post(Request $request)
    {
      $filename = 'blog-'.time().'.'.$request->gambar->getClientOriginalExtension();
      $request->gambar->move(public_path('source/blog'),$filename);

      Blog::create([
        'judul' => request('judul'),
        'slug' => str_slug(request('judul')),
        'konten' => request('konten'),
        'gambar' => $filename
      ]);

      return redirect()->route('admin.blog')->withSuccess('Blog Berhasil di Posting');
    }

    public function edit($id)
    {
      $blog = Blog::find($id);

      return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
      $blog = Blog::find($id);

      if ($request->gambar == "") {
        $blog->gambar = $blog->gambar;
      }
      else {
        File::delete('source/blog/'.$blog->gambar);
        $filename = 'blog-'.time().'.'.$request->gambar->getClientOriginalExtension();
        $request->gambar->move(public_path('source/blog'),$filename);
        $blog->gambar = $filename;
      }

      $blog->update([
        'judul' => request('judul'),
        'slug' => str_slug(request('judul')),
        'konten' => request('konten')
      ]);

      return redirect()->route('admin.blog')->withInfo('Blog Berhasil Dirubah');
    }

    public function delete($id)
    {
      $blog = Blog::find($id);
      $blog->delete();
      File::delete('source/blog/'.$blog->gambar);

      return redirect()->route('admin.blog')->withDanger('Blog Berhasil di Hapus');
    }

}

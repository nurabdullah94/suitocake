<?php

namespace App\Http\Controllers\Admin;

use DB;
use Storage;
use Illuminate\Support\Facades\File;
use App\Produk;
use App\Kategoriproduk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminProdukController extends Controller
{
    public function index()
    {
      $kategori = Kategoriproduk::all();
      $produks = Produk::all();
      return view('admin.produk.index', compact('kategori', 'produks'));
    }

    public function create()
    {
      $kategori = Kategoriproduk::all();
      return view('admin.produk.create', compact('kategori'));
    }

    public function post(Request $request)
    {
      $filename = 'produk-'.time().'.'.$request->gambar->getClientOriginalExtension();
      $request->gambar->move(public_path('source/produk'),$filename);

      Produk::create([
        'nama_produk' => request('nama_produk'),
        'kategoriproduk_id' => request('kategoriproduk_id'),
        'slug' => str_slug(request('nama_produk')),
        'keterangan' => request('keterangan'),
        'stok' => request('stok'),
        'harga' => request('harga'),
        'gambar' => $filename
      ]);

      return redirect()->route('admin.produk')->withSuccess('Produk Berhasil di Posting');
    }

    public function edit($id)
    {
      $produk = Produk::find($id);
      $kategori = Kategoriproduk::all();

      return view('admin.produk.edit', compact('produk', 'kategori'));
    }

    public function update(Request $request, $id)
    {
      $produk = Produk::find($id);

      if ($request->gambar == "") {
        $produk->gambar = $produk->gambar;
      }
      else {
        File::delete('source/produk/'.$produk->gambar);
        $filename = 'produk-'.time().'.'.$request->gambar->getClientOriginalExtension();
        $request->gambar->move(public_path('source/produk'),$filename);
        $produk->gambar = $filename;
      }

      $produk->update([
        'nama_produk' => request('nama_produk'),
        'kategoriproduk_id' => request('kategoriproduk_id'),
        'slug' => str_slug(request('nama_produk')),
        'keterangan' => request('keterangan'),
        'stok' => request('stok'),
        'harga' => request('harga')
      ]);

      return redirect()->route('admin.produk')->withInfo('Produk Berhasil Dirubah');
    }

    public function delete($id)
    {
      $produk = Produk::find($id);
      $produk->delete();
      File::delete('source/produk/'.$produk->gambar);

      return redirect()->route('admin.produk')->withDanger('Produk Berhasil di Hapus');
    }

    // ===================================================================

    public function kategori()
    {
      Kategoriproduk::create([
        'kategori' => request('kategori'),
        'slug' => str_slug(request('kategori')),
      ]);

      return redirect()->route('admin.produk')->withSuccess('Kategori Berhasil di tambah');
    }

    public function kategoridelete($id)
    {
      $kategori = Kategoriproduk::findOrFail($id);
      $kategori->delete();

      return redirect()->route('admin.produk')->withSuccess('Kategori berhasil di hapus');
    }
}

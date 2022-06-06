<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
      'nama_produk',
      'kategoriproduk_id',
      'slug',
      'stok',
      'harga',
      'keterangan',
      'gambar',
    ];

    public function kategoriproduk()
    {
      return $this->belongsTo(Kategoriproduk::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategoriproduk extends Model
{
    protected $fillable = [
      'kategori',
      'slug',
    ];

    public function produk()
    {
      return $this->hasMany(Produk::class);
    }
}

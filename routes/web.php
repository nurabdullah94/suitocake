<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// produk
Route::get('/produk', 'ProdukController@index')->name('produk');
Route::get('/produk/show', 'ProdukController@show')->name('produk.show');

// blog
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/show', 'BlogController@show')->name('blog.show');

Route::get('/kontak', 'KontakController@index')->name('kontak');

// Auth
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){
  // Admin Produk
  Route::get('/admin/produk', 'Admin\AdminProdukController@index')->name('admin.produk');
  Route::get('/admin/produk/tambah', 'Admin\AdminProdukController@create')->name('admin.produk.create');
  Route::get('/admin/produk/ubah', 'Admin\AdminProdukController@edit')->name('admin.produk.edit');

  // Admin blog
  Route::get('/admin/blog', 'Admin\AdminBlogController@index')->name('admin.blog');
  Route::get('/admin/blog/tambah', 'Admin\AdminBlogController@create')->name('admin.blog.create');
  Route::get('/admin/blog/ubah', 'Admin\AdminBlogController@edit')->name('admin.blog.edit');

});

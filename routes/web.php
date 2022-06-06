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
Route::get('/produk/{slug}', 'ProdukController@show')->name('produk.show');

// blog
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{slug}', 'BlogController@show')->name('blog.show');

Route::get('/kontak', 'KontakController@index')->name('kontak');

// Auth
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){
  // Admin Produk
  Route::get('/admin/produk', 'Admin\AdminProdukController@index')->name('admin.produk');
  Route::get('/admin/produk/tambah', 'Admin\AdminProdukController@create')->name('admin.produk.create');
  Route::post('/admin/produk/tambah', 'Admin\AdminProdukController@post')->name('admin.produk.post');
  Route::get('/admin/produk/{id}/ubah', 'Admin\AdminProdukController@edit')->name('admin.produk.edit');
  Route::patch('/admin/produk/{id}/update', 'Admin\AdminProdukController@update')->name('admin.produk.update');
  Route::delete('/admin/produk/{id}/hapus', 'Admin\AdminProdukController@delete')->name('admin.produk.delete');

  // Admin Produk Kategori
  Route::post('/admin/produk/kategori', 'Admin\AdminProdukController@kategori')->name('admin.produk.kategori');
  Route::delete('/admin/produk/kategori/{id}/hapus', 'Admin\AdminProdukController@kategoridelete')->name('admin.produk.kategori.delete');

  // Admin blog
  Route::get('/admin/blog', 'Admin\AdminBlogController@index')->name('admin.blog');
  Route::get('/admin/blog/tambah', 'Admin\AdminBlogController@create')->name('admin.blog.create');
  Route::post('/admin/blog/tambah', 'Admin\AdminBlogController@post')->name('admin.blog.post');
  Route::get('/admin/blog/{id}/ubah', 'Admin\AdminBlogController@edit')->name('admin.blog.edit');
  Route::patch('/admin/blog/{id}/update', 'Admin\AdminBlogController@update')->name('admin.blog.update');
  Route::delete('/admin/blog/{id}/hapus', 'Admin\AdminBlogController@delete')->name('admin.blog.delete');

});

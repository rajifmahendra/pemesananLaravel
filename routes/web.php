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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/detail', 'DetailController@index')->name('detail');
Route::get('/checkout', 'CheckoutController@index')->name('checkout');
Route::get('/checkout/success', 'CheckoutController@success')->name('checkout-success');


//nanti kita bisa rapih untuk menstruktur kan route(prefix)
//namaspace adalah secara automotis /admin, ketika kita manggil tidak perlu make admin legal
Route::prefix('admin')->namespace('Admin')->middleware(['auth', 'admin'])->group(function(){
  Route::get('/', 'DashboardController@index')->name('dashboard');
  Route::resource('travel-package', 'TravelPackageController');
  Route::resource('gallery', 'GalleryController');
  Route::resource('transaction', 'TransactionController');
});

Auth::routes(['verify' => true]);

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/cart', 'HomeController@cart')->name('cart');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact2', 'HomeController@contact2')->name('contact2');
Route::get('/service', 'HomeController@service')->name('service');
Route::get('/sale/{id}/detail', 'HomeController@detail')->name('detail');
Route::get('/sale/{id}', 'HomeController@sale')->name('sale');

//Route::get('/home', 'HomeController@home')->name('home');

Route::get('/writer', 'HomeController@writer')->name('writer');

Route::resource('abouts', 'AboutsController');
Route::resource('ourteams', 'OurteamsController');
Route::resource('advantages', 'AdvantagesController');
Route::resource('contacts', 'ContactsController');
Route::resource('services', 'ServicesController');
Route::resource('sales', 'SalesController');
Route::resource('types', 'TypesController');

<?php
use App\Type;
use App\Address;

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





Route::get('/about', 'ShopController@about')->name('about');
Route::get('/profile', 'ShopController@profile')->name('profile');
Route::patch('/profile2/{id}', 'ShopController@profile2')->name('profile2');
Route::get('/contact', 'ShopController@contact')->name('contact');
Route::post('/contact2', 'ShopController@contact2')->name('contact2');
Route::get('/writer', 'ShopController@writer')->name('writer');
Route::get('/', 'ShopController@sale')->name('sale');
Route::get('/sale/{id}', 'ShopController@sale2')->name('sale2');
Route::get('/sale/{id}/detail', 'shopController@detail')->name('detail');
Route::get('/search', 'ShopController@search')->name('search');
Route::get('/cart', 'CartController@cart')->name('cart');
Route::get('/thankyou', 'CartController@thankyou')->name('thankyou');
Route::post('/cart_add/{id}', 'CartController@cart_add')->name('cart_add');
Route::get('/delete_cart/{id}', 'CartController@delete_cart')->name('delete_cart');
Route::post('/email_insert', 'ShopController@email_insert')->name('email_insert');
Route::get('/address', 'CartController@address')->name('address');
Route::post('/buy/{id2}','CartController@buy')->name('buy');
Route::get('/buyback/{id}','CartController@buyback')->name('buyback');









Route::resource('abouts', 'AboutsController');
Route::resource('ourteams', 'OurteamsController');
Route::resource('advantages', 'AdvantagesController');
Route::resource('contacts', 'ContactsController');
Route::resource('sales', 'SalesController');
Route::resource('types', 'TypesController');
Route::resource('emails', 'EmailsController');
Route::resource('addresses', 'AddressesController');

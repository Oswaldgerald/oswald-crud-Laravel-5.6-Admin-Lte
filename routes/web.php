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




//Route::get('/', function () {
//    return view('welcome');
//});

Route::resource('products','ProductController');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::get('admin','MainController@getAdmin');
Route::get('pages/admin','MainController@addAdminIndex');
Route::post('pages/admin','MainController@addAdmin');

Route::get('businessowner','MainController@getBusinessOwner');
Route::get('/addbusinessowner','MainController@addBusinessOwnerIndex');
Route::post('/addbusinessowner','MainController@addBusinessOwner');


Route::get('/cashier','MainController@getCashier');
Route::get('/addcashier','MainController@addCashierIndex');
Route::post('/addcashier','MainController@addCashier');


Route::get('storemanager','MainController@getStoreManager');
Route::get('addstoremanager','MainController@addStoreManagerIndex');
Route::post('addstoremanager','MainController@addStoreManager');



//Route::get('profile', function () {
//    return view('pages.profile');
//});
//
//Route::get('profile', function () {
//    return view('pages.profile');
//});
//
//Route::get('profile', function () {
//    return view('pages.profile');
//});
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/charts', 'ChartsPageController@index')->name('charts');
Route::get('orders', 'OrdersController@create');
Route::get('orders', function(){$orders=App\Orders::all();});
Route::get('customers', 'CustomersController@create');
Route::get('customers', function(){$customers=App\Customers::all();});
Route::get('orderdetails', function(){$orderdetails=App\OrderDetails::all();});
Route::get('orderdetails', 'OrderDetailsController@create');
Route::get('products', function(){$products=App\ProductsController::all();});

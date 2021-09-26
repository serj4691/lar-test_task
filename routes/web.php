<?php

use Illuminate\Support\Facades\Route;

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
    return view('layouts.index');
            })->name('/');
Route::get('list_couriers', 'App\Http\Controllers\CourierController@list_couriers')->name('list_couriers');
Route::get('list_free', 'App\Http\Controllers\CourierController@list_free')->name('list_free');
Route::get('list_tasks/{id}', 'App\Http\Controllers\CourierController@list_tasks')->name('list_tasks');
Route::get('list_orders', 'App\Http\Controllers\OrderController@list_orders')->name('list_orders');
Route::get('list_order/{id}', 'App\Http\Controllers\OrderController@order_info')->name('list_order');
Route::get('order_edit/{id}', 'App\Http\Controllers\OrderController@order_edit')->name('order_edit');
Route::post('edit_save/{id}', 'App\Http\Controllers\OrderController@edit_save')->name('edit_save');
Route::get('ceate_order', 'App\Http\Controllers\OrderController@create_order')->name('ceate_order');
Route::post('new_save', 'App\Http\Controllers\OrderController@new_save')->name('new_save');
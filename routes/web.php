<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

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

Route::get('calculator', 'CalculatorController@index')->name('Calculator#index');
Route::post('calculate', 'CalculatorController@calculate')->name('Calculator#calculate');

//route group


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'] , function () {
    Route::get("one", 'AdminController@one');
    Route::get("two", 'AdminController@two');
    Route::get("three",'AdminController@three');
});

Route::group(['prefix' => 'customer'],function () {
    Route::get('register','CustomerController@register')->name('Customer#register');
    Route::post('create','CustomerController@create')->name('Customer#create');
    Route::get('list','CustomerController@list')->name('Customer#list');
    Route::get('seemore/{id}','CustomerController@seemore')->name('Customer#seemore');
    Route::get('delete/{id}','CustomerController@delete')->name('Customer#delete');
    Route::get('edit/{id}','CustomerController@edit')->name('Customer#edit');
    Route::post('update/{id}', 'CustomerController@update')->name('Customer#update');
});
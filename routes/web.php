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

Route::get('calculator','CalculatorController@index')->name('Calculator#index');
Route::post('calculate','CalculatorController@calculate')->name('Calculator#calculate');

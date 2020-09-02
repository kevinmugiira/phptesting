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
    return view('welcome');
});

Route:: resource("testing",'TestController');

//testing
Route::get('contact', 'pagesController@contact');
Route::get('contacts','contact2Controller@contacts');
//Route::get('index','IndexController@index');
Route::get('blogs','BlogsController@index');
Route::get('blogs/{id}','BlogsController@show');

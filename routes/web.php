<?php

use Illuminate\Support\Facades\Auth;
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

/* Initial Home Page */
// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');
Route::get('/', 'PagesController@home');

Route::view('submission', 'application');
Route::post('submission', 'ApplicationsController@createApplication')->name('submission');

/* Originally this is for xman to do the rego */
// Route::view('create', 'register');
// Route::post('create', 'ApplicationController@saveApplication');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

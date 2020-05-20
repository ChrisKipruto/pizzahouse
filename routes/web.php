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

# Home Page
Route::get('/', 'PagesController@index');

# About Page
Route::get('/about', 'PagesController@about');

# Services Page
Route::get('/services', 'PagesController@services');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

# Pizzas
Route::resource('pizzas', 'PizzasController');

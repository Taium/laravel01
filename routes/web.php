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

Route::get('/', 'Websitecontroller@index');

Route::get('/practice', 'Websitecontroller@practice');

Route::get('/area', 'Websitecontroller@area');

Route::get('/contact', 'Websitecontroller@contact');

Route::get('/about', 'Websitecontroller@about');


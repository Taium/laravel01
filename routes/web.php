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

Route::get('/admin', 'Websitecontroller@admin');

Route::post('/admin/add/post', 'PostController@store')->name('admin.post.store');

Route::post('/admin/delete/post', 'PostController@delete')->name('admin.post.delete');


Route::get('/post/{id}', 'PostController@single')->name('post.single');

Route::get('/edit/{id}', 'PostController@edit');

Route::post('/update/{id}', 'PostController@update')->name('admin.post.update');





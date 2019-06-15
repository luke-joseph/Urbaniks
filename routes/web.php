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

Route::get('/', 'PagesController@index');
Route::get('/classes', 'PagesController@classes');
Route::get('/merchandise', 'PagesController@merchandise');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/contact', 'PagesController@contact');
Route::get('/registration', 'PagesController@registration');
Route::get('/order-form', 'OrderFormsController@download');

Route::post('/registration', 'PupilRegistrationsController@store');
Route::post('/contact', 'ContactsController@store');

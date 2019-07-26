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

//coming soon page
Route::get('/', 'PagesController@comingsoonredirect');
Route::get('/coming-soon', 'PagesController@comingsoon')->name('coming-soon');

Route::get('/draft', 'PagesController@index');
Route::get('/draft/classes', 'PagesController@classes');
Route::get('/draft/merchandise', 'PagesController@merchandise');
Route::get('/draft/gallery', 'PagesController@gallery');
Route::get('/draft/teachers', 'PagesController@teachers');
Route::get('/draft/contact', 'PagesController@contact');
Route::get('/draft/registration', 'PagesController@registration');
Route::get('/draft/order-form', 'OrderFormsController@download');

//post routes
Route::post('/registration', 'PupilRegistrationsController@store');
Route::post('/contact', 'ContactsController@store');

//legal
Route::get('/privacy-policy', 'LegalController@privacy');
Route::get('/cookie-policy', 'LegalController@cookies');
Route::get('/terms', 'LegalController@terms');

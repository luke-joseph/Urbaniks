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
// Route::get('/', 'PagesController@comingsoonredirect');
// Route::get('/coming-soon', 'PagesController@comingsoon')->name('coming-soon');

Route::get('/', 'PagesController@index');
Route::get('/classes', 'PagesController@classes');
Route::get('/achievements', 'PagesController@achievements');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/teachers', 'PagesController@teachers');
Route::get('/contact', 'PagesController@contact');
Route::get('/notice-board', 'PagesController@noticeboard');
Route::get('/order-form', 'OrderFormsController@download');

//post routes
Route::post('/registration', 'PupilRegistrationsController@store');
Route::post('/contact', 'ContactsController@store');

//legal
Route::get('/privacy-policy', 'LegalController@privacy');
Route::get('/cookie-policy', 'LegalController@cookies');
Route::get('/terms', 'LegalController@terms');

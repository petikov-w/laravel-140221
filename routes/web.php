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

Route::get('/', 'App\Http\Controllers\PageController@showHomePage')->name('home');;
Route::get('catalog', 'App\Http\Controllers\PageController@showCatalogPage');
Route::get('about', 'App\Http\Controllers\PageController@showAboutPage');
Route::get('contact', 'App\Http\Controllers\ContactController@index')->name('contacts');
//Route::get('contact/change-contacts', 'App\Http\Controllers\ContactController@create')->name('change-contacts.create');
//Route::post('contact/change-contacts', 'App\Http\Controllers\ContactController@store')->name('change-contacts.store');
Route::get('admin', 'App\Http\Controllers\ContactController@create')->name('admin.create');
Route::post('admin', 'App\Http\Controllers\ContactController@store')->name('admin.store');
Route::redirect('/here', '/there');


Route::fallback(function (){
   abort(404, 'Упс! Страница не найдена...');}
   );

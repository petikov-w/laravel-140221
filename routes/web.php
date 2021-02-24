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


Route::get('/', 'App\Http\Controllers\PageController@showHomePage');
Route::get('{slug}', 'App\Http\Controllers\PageController@showMenuItem');
Route::get('catalog/{slug}', 'App\Http\Controllers\PageController@showMenuItem');
Route::get('contact/{slug}', 'App\Http\Controllers\PageController@showMenuItem');
Route::post('contact/change-contacts/submit', function (){ return "Привет!!!";})->name('contact-form');
Route::get('links/{id}', 'App\Http\Controllers\PageController@ShowLinksPage');

//Route::get('/token', function (Request $request) {
//    $token = $request->session()->token();
//    $token = csrf_token();
//});

Route::fallback(function (){
   abort(404, 'Упс! Страница не найдена...');
});

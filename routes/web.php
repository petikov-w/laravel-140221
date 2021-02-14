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

Route::get('/', 'App\Http\Controllers\HomeController@index');
//Route::get('about', 'App\Http\Controllers\AboutController@index');
Route::get('{slug}', 'App\Http\Controllers\PageController@show');
Route::get('links/{id}', 'App\Http\Controllers\LinkController@index');


//Route::get('links/{id}', function ($id){
//    return  view('links', ['message' => 'Это страница "Список ссылок"', 'id'=>$id]);
//});

Route::fallback(function (){
   abort(404, 'Упс! Страница не найдена...');
});

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       return  view('home', ['message' => 'Это главная страница сайта',
                             'title_page' => 'laravel-140221 - Главная страница',
                             'is_home_page' => true]);
    }
}

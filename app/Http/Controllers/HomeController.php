<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       return  view('home', ['message' => 'Это главная страница сайта',
                             'title_page' => 'laravel-140221 - Главная страница']);
    }
}

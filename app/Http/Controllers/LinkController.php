<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index($id){
       return  view("links", ['message' => 'Это страница "Список ссылок"',
                              'title_page' => 'laravel-140221 - Страница ссылок',
                              'id' => $id]);
    }
}

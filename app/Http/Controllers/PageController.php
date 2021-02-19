<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class PageController extends Controller
{
    public function show($slug){


       switch ($slug) {
           case 'about':
             $array_arg = ['message' => 'Это страница "О нас"',
                           'title_page' => 'laravel-140221 - Страница "О нас"'];
             break;
           case 'contact':
             $array_arg = ['message' => 'Наши контакты: ',
                           'telefon' => '+7 (909) 428-24-63',
                           'email' => 'developer-krox@yandex.ru',
                           'title_page' => 'laravel-140221 - Страница контактов'];
            break;
           case 'catalog':
               $array_arg = ['message' => 'Это страница c каталогом тем',
                             'title_page' => 'laravel-140221 - Страница каталога'];
               break;
       }
       return  view("$slug", $array_arg);
    }
}



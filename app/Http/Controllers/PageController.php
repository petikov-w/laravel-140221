<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class PageController extends Controller
{
    public function show($slug){


       switch ($slug) {
//           case '/':
//             $array_arg = ['message' => 'Это главная страница сайта'];
//             $slug = 'home';
//             break;

           case 'about':
             $array_arg = ['message' => 'Это страница "О нас"'];
             break;
           case 'contact':
             $array_arg = ['message' => 'Наши контакты: ',
                           'telefon' => '+7 (909) 428-24-63',
                           'email' => 'developer-krox@yandex.ru'];
            break;
           case 'catalog':
               $array_arg = ['message' => 'Это страница c каталогом тем'];
               break;
       }
       return  view("$slug", $array_arg);
    }
}



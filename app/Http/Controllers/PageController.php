<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Models\Menu;

class PageController extends Controller
{
    public function show($slug){
//          dump($slug);

//        $id_parent = Menu::query()->where('url','/'.$slug)->value('id');
//        $smenu = Menu:: query()->get(['title', 'url','parent'])->where('parent',$id_parent)->toArray();
//        dump($id_parent);
//        dump($smenu);
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
                             'title_page' => 'страница c каталогом тем'];

               break;

           case 'delete-theme':
               $array_arg = ['message' => 'Это страница c формой для удаления темы',
                             'title_page' => 'laravel-140221 - страница удаления темы'];
               break;

           case 'create-theme':
               $array_arg = ['message' => 'Это страница c формой для создания новой темы',
                             'title_page' => 'laravel-140221 - страница создания новой темы'];
               break;

           case 'change-contacts':
               $array_arg = ['message' => 'Это страница c формой для изменения контактной информации',
                             'title_page' => 'laravel-140221 - страница изменения контактной информации'];
               break;
       }
       return  view("$slug", $array_arg);
    }
}



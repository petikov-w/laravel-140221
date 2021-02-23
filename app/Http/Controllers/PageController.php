<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Models\Menu;
use App\Models\Theme;

class PageController extends Controller
{
    public function showMenuItem($slug){
//          dump($slug);

//        $id_parent = Menu::query()->where('url','/'.$slug)->value('id');
//        $smenu = Menu:: query()->get(['title', 'url','parent'])->where('parent',$id_parent)->toArray();
//        dump($id_parent);
//        dump($smenu);
       switch ($slug) {
           case '':
               $array_arg = ['message' => 'Это главная страница сайта',
                   'title' => 'Главная страница'];
               $view = 'home';
               break;
           case 'about':
             $array_arg = ['message' => 'Это страница "О нас"',
                           'title' => 'Страница "О нас"'];
             $view = 'about';
             break;
           case 'contact':
             $array_arg = ['message' => 'Наши контакты: ',
                           'telefon' => '+7 (909) 428-24-63',
                           'email' => 'developer-krox@yandex.ru',
                           'title' => 'Страница контактов'];
               $view = 'contact';
            break;
           case 'catalog':
               $array_arg = ['message' => 'Это страница c каталогом тем',
                             'title' => 'Страница c каталогом тем'];
               $view = 'catalog';
               break;

           case 'delete-theme':
               $array_arg = ['message' => 'Это страница c формой для удаления темы',
                             'title' => 'Страница удаления темы'];
               $view = 'delete-theme';
               break;

           case 'create-theme':
               $array_arg = ['message' => 'Это страница c формой для создания новой темы',
                             'title' => 'Страница создания новой темы'];
               $view = 'create-theme';
               break;

           case 'change-contacts':
               $array_arg = ['message' => 'Это страница c формой для изменения контактной информации',
                             'title' => 'Страница изменения контактной информации'];
               $view = 'change-contacts';
               break;
       }
       return  view($view, $array_arg);
    }
    public function showHomePage(){
        return  view('home', ['message' => 'Это главная страница сайта',
            'title' => 'Главная страница']);
    }
    public function ShowLinksPage($id) {
            $title_theme = Theme::query()->where('id',$id)->value('title');
            return  view("links", ['message' => 'Это страница темы ',
                'title' => 'Страница ссылок на тему "'.$title_theme.'"',
                'current_theme' => $title_theme,
                'id_current_theme' => $id]);
        }
}



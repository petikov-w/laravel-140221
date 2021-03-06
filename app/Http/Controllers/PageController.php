<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Models\Menu;
use App\Models\Theme;
use App\Models\Contact;

class PageController extends Controller
{
    public function showMenuItem($slug)
    {

            switch ($slug) {
//                case '':
//                    $array_arg = ['message' => 'Это главная страница сайта',
//                        'title' => 'Главная страница'];
//                    $view = 'home';
//                    break;

//                case 'about':
//                    $array_arg = ['message' => 'Это страница "О нас"',
//                        'title' => 'Страница "О нас"'];
//                    $view = 'about';
//                    break;

//                case 'catalog':
//                    $array_arg = ['message' => 'Это страница c каталогом тем',
//                        'title' => 'Страница c каталогом тем'];
//                    $view = 'catalog';
//                    break;

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

            }

       return  view($view, $array_arg);
    }

    public function showAboutPage(){
        $array_arg = ['message' => 'Это страница "О нас"',
            'title' => 'Страница "О нас"'];
        return view('about', $array_arg);
    }
    public function showCatalogPage(){
        $array_arg = ['message' => 'Это страница c каталогом тем',
            'title' => 'Страница c каталогом тем'];
        return view('catalog', $array_arg);
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

    public function submit(Request $req){
        $validation = $req->validate([
            'telefon' => 'required',
            'email' => 'required|email'
        ]);

        App\Model\Contact::create($validation);


//        $validation = $req->validate([
//            'telefon' => 'required|match:/[0-9]+/' ,
//            'email' => 'required|email'
//        ]);
//        $f1 = Contact::find(1);
//        $f1->email = $req->input('email');
//        $f1->save();

//        return  view('submit', ['message' => 'Это sss страница сайта',
//            'title' =>  request('email')]);

    }


}



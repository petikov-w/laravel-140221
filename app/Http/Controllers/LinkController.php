<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Theme;


class LinkController extends Controller
{
    public function index($id){
       $title_theme = Theme::query()->where('id',$id)->value('title');
       return  view("links", ['message' => 'Это страница темы ',
                              'title_page' => 'laravel-140221 - Страница ссылок на тему "'.$title_theme.'"',
                              'current_theme' => $title_theme,
                              'id_current_theme' => $id]);
    }
}

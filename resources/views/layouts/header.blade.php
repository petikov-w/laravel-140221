<?php
$menu =[['title'=>'Главная', 'url' => '/'],
    ['title'=>'Каталог', 'url' => '/catalog'],
    ['title'=>'О нас', 'url' => '/about'],
    ['title'=>'Контакты', 'url' => '/contact']];
?>

<div class="header">
    <div class="logo">
        @if ($is_home_page)
            <div class="logo-1s">Petikov<span class="logo-2s">Studio</span></div>
        @else
            <a href="{{'/'}}">
                <div class="logo-1s">Petikov<span class="logo-2s">Studio</span></div>
            </a>
        @endif
    </div>
    <nav><ul class="main-menu">
            @foreach($menu as $item_menu)
                @if ($item_menu['url']=='/')
                    @if ($is_home_page)
                        <li class="menu-item">{{$item_menu['title']}}</li>
                    @else
                        <a href={{$item_menu['url']}}><li class="menu-item">{{$item_menu['title']}}</li></a>
                    @endif
                @else
                    <a href="{{$item_menu['url']}}"><li class="menu-item">{{$item_menu['title']}}</li></a>
                @endif
            @endforeach
       </ul>
    </nav>
</div>



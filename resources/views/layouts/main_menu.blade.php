<div class="header">
    <div class="logo">
        <div class="logo-1s">Petikov<span class="logo-2s">Studio</span></div>
    </div>
    <?php
        $menu =[['title'=>'Главная', 'url' => '/'],
                ['title'=>'Каталог', 'url' => '/catalog'],
                ['title'=>'О нас', 'url' => '/about'],
                ['title'=>'Контакты', 'url' => '/contact']]
    ?>

    <nav><ul class="main-menu">
            @foreach($menu as $item_menu)
{{--                @if ($is_home_page)--}}
{{--                    <li class="menu-item">Главная</li>--}}
{{--                @else--}}
{{--                    <a href="{{'/'}}"><li class="menu-item">Главная</li></a>--}}
{{--                @endif--}}
                <a href="{{$menu['url']}}"><li class="menu-item">{{$menu['title']}}</li></a>

            @endforeach
{{--            <li class="menu-item">Главная</li>--}}
{{--            <a href={{'/catalog'}}><li class="menu-item">Каталог</li></a>--}}
{{--            <a href={{'/about'}}><li class="menu-item">О нас</li></a>--}}
{{--            <a href="{{'/contact'}}"><li class="menu-item">Контакты</li></a>--}}
        </ul>
    </nav>
</div>


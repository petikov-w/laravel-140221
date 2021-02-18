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
            {{--            @if ($is_home_page)--}}
            {{--                <li class="menu-item">Главная</li>--}}
            {{--            @else--}}
            {{--                 <a href="{{'/'}}"><li class="menu-item">Главная</li></a>--}}
            {{--            @endif--}}
            {{--            <a href={{'/catalog'}}><li class="menu-item">Каталог</li></a>--}}
            {{--            <a href="{{'/about'}}"><li class="menu-item">О нас</li></a>--}}
            {{--            <a href="{{'/contact'}}"><li class="menu-item">Контакты</li></a>--}}
            @yield('main_menu')
        </ul>
    </nav>
</div>

@section('main_menu')
    @php($menu =[['title'=>'Главная', 'url' => '/'],
            ['title'=>'Каталог', 'url' => '/catalog'],
            ['title'=>'О нас', 'url' => '/about'],
            ['title'=>'Контакты', 'url' => '/contact']]);
<!--    --><?php //dump($menu) ?>
    @foreach($menu as $item_menu)
        <a href="{{$item_menu['url']}}"><li class="menu-item">{{$item_menu['title']}}</li></a>
    @endforeach
@endsection

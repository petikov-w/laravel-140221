<!doctype html>
<html lang="en">
<head>
    @include('layouts.meta')
    <title>{{$title_page}}</title>
    @include('layouts.styles')
</head>
<body>
    <div class="container">
        @include('layouts.header')
        @yield('content')
    </div>
    @include('layouts.scripts')
</body>
</html>

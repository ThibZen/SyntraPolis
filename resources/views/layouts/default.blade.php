<!DOCTYPE html>
<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('header')
            <header>
                @include('includes.topnavigation')
                @include('includes.botnavigation')
            </header>
        @show
        @section('content')
            <div class="container">
            </div>
        @show
        <footer>
            @include('includes.footer')
        </footer>
    </body>
</html>

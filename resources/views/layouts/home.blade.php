<!DOCTYPE html>
<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <header>
            @include('includes.topnavigation')
            @include('includes.navbanner')
            @include('includes.botnavigation')
        </header>
        <div class="container">
            @include('includes.movietiles')
            @include('includes.banner')
        </div>
        <footer>
            @include('includes.footer')
        </footer>
    </body>
</html>
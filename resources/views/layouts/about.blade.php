<!DOCTYPE html>
<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <header>
            @include('includes.topnavigation')
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
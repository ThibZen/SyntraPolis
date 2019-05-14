<!DOCTYPE html>
<html>
    @include('includes.head')
    <body>
        @section('header')
            <header>
                @include('includes.topnavigation')
                @yield('header')
            </header>
        <div class="container">
            @yield('content')
        </div>
        <footer>
            @include('includes.footer')
        </footer>
    </body>
</html>

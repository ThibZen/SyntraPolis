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
            <h1> Upcoming Movies </h1>
            <section class="upcomingcontainer">
                @include('includes.upcoming')
            </section>
        </div>

        <footer>
            @include('includes.footer')
        </footer>
    </body>
</html>
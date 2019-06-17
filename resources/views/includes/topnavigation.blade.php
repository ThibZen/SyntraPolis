<nav class="topnav">
    <div id="logo">
        <a href="{{ route('home') }}">
        <img src="{{ asset('/images/logo.png') }}">
        </a>
    </div>
    <a href="{{ route('login') }}">
        <i class="fas fa-user"></i>
    </a>
    <ul>
        <a href="{{ route('upcoming') }}">
            <li> Upcoming </li>
        </a>
        <a href="{{ route('schedule') }}">
            <li> Schedule </li>
        </a>
        <a href="{{ route('about') }}">
            <li> About </li>
        </a>
        <a href="{{ route('contact') }}">
            <li> Contact </li>
        </a>
        <a href="{{ route('login') }}">
            <li> Dashboard </li>
        </a>
    </ul>
    <div class="hamburger">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
</nav>

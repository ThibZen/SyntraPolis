@extends('layouts.default')
        <header>
            <!-- THIBAULT : DE TOPNAV WORDT INGELADEN VIA DE DEFAULT. HIJ ZOU DE TOPNAV + NAVBANNER & BOTNAV MOETEN INLADEN OP DEZE PAGINA. -->
            @parent
            @include('includes.navbanner')
            @include('includes.botnavigation')
        </header>
        <div class="container">
            @include('includes.movietiles')
            @include('includes.banner')
        </div>

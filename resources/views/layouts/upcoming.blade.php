@extends('layouts.default')

        <header>
            @include('includes.topnavigation')
        </header>
        
        <div class="container">
            <h1> Upcoming Movies </h1>
            <section class="upcomingcontainer">
                @include('includes.upcoming')
            </section>
        </div>
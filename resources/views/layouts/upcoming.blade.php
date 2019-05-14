@extends('layouts.default')
              
@section('content')        
    <h1> Upcoming Movies </h1>
    <section class="upcomingcontainer">
        @include('includes.upcoming')
    </section>
@endsection
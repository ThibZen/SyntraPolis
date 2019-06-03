@extends('layouts.default')

@section('header')
    @include('includes.navbanner')
    @include('includes.botnavigation')
@endsection

@section('content')
    @forelse($movies as $movie)
        <a href="#">
            <img src="{{ asset('db/Poster/'.$movie->Foto.'.jpg') }}">
        </a>
    @empty
        <div>
            <p>There are no movies</p>
        </div>
    @endforelse

    @include('includes.banner')
@endsection

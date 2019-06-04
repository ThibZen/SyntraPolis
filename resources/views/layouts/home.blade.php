@extends('layouts.default')

@section('header')
    @include('includes.navbanner')
    @include('includes.botnavigation')
@endsection

@section('content')
    {{--@forelse($movies as $movie)
        <a href="#">
            <img src="{{ asset('../resources/db/Poster/'.$movie->Foto.'.jpg') }}">
        </a>
    @empty
        <div>
            <p>There are no movies</p>
        </div>
    @endforelse--}}

    <section class="tilecontainer">
    @for ($i = 0; $i < 8; $i++)
        <div class="movie">
            <a href="#">
                <img src="{{ asset('/images/Poster/'.$movies[$i]->Foto.'.jpg') }}">
            </a>
        </div>
    @endfor
    </section>

    @include('includes.banner')
@endsection

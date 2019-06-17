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
    @foreach ($filter as $filter)
        <div class="movie ">
            <a href="{{ route('specificMovie',$filter->id) }}">
                <div class="overlay">
                    <h2>{{$filter->Title}}</h2>
                </div>
                <img src="{{ asset('/images/Poster/'.$filter->Foto.'.jpg') }}">
            </a>
        </div>
    @endforeach
    </section>
    @include('includes.banner')
@endsection

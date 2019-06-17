@extends('layouts.default')

@section('header')
    @include('includes.botnavigation')
@endsection

@section('content')
        <h1> Schedule </h1>
        <section class="tilecontainer">
                @foreach($filter as $filter)
                <div class="movie">
                        <a href="{{ route('specificMovie',$filter->id) }}">
                                <img src="{{ asset('/images/Poster/'.$filter->Foto.'.jpg') }}">
                        </a>
                        <p> Time </p>
                        <ul>
                            <a href="#">
                                <li> {{$filter->ScreeningStartTime}} </li>
                            </a>
                            <a href="#">
                                <li> {{$filter->ScreeningStartTime}} </li>
                            </a>
                            <a href="#">
                                <li> {{$filter->ScreeningStartTime}} </li>
                            </a>
                        </ul>
                </div>
                @endforeach
        </section>
@endsection

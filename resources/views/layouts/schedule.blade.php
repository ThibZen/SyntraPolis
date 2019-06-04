@extends('layouts.default')

@section('content')
        <h1> Schedule </h1>
        <section class="tilecontainer">
                @for ($i = 0; $i < 12; $i++)
                <div class="movie">
                        <a href="#">
                                <img src="{{ asset('/images/Poster/'.$movies[$i]->Foto.'.jpg') }}">
                        </a>
                        <p> Time </p>
                        <ul>
                            <a href="#">
                                <li> {{$movies[$i]->ScreeningStartTime}} </li>
                            </a>
                            <a href="#">
                                <li> {{$movies[$i]->ScreeningStartTime}} </li>
                            </a>
                            <a href="#">
                                <li> {{$movies[$i]->ScreeningStartTime}} </li>
                            </a>
                        </ul>
                </div>
                @endfor
        </section>
@endsection

@extends('layouts.default')

@section('content')
    <h1> Upcoming Movies </h1>
    <section class="upcomingcontainer">
            @foreach($filter as $filter)
            <div class="upcomingmovie">
                    <img src="{{ asset('/images/Poster/'.$filter->Foto.'.jpg') }}">
                    <h2> {{$filter->Title}} </h2>
                    <h3> {{ date('d-m-Y', strtotime($filter->ReleaseDate))}} </h3>

                    <p>
                        {{$filter->DescriptionLong}}
                    </p>
                    <div class="readmore"></div>
                </div>
        @endforeach
    </section>
@endsection

@extends('layouts.default')
              
@section('content')        
    <h1> Upcoming Movies </h1>
    <section class="upcomingcontainer">
            @for ($i = 0; $i < 3; $i++)
            <div class="upcomingmovie">
                    <img src="{{ asset('/images/Poster/'.$movies[$i]->Foto.'.jpg') }}">
                    <h2> {{$movies[$i]->Title}} </h2>
                    <h3> {{ date('d-m-Y', strtotime($movies[$i]->ReleaseDate))}} </h3>
                
                    <p>
                        {{$movies[$i]->DescriptionLong}}
                    </p>                    
                    <div class="readmore"></div>
                </div>
        @endfor
    </section>
@endsection

@extends('layouts.default')

@section('content')
        <div class="specificcontainer">
        <section class="specificright">
                <h1> {{$movie->Title}} </h1>
                <article class="movieinfo">
                    <p>
                        Director: John Doe
                    </p>
                    <p>
                        Actors: John Doe, John Doe, John Doe
                    </p>
                    <p>
                        Genre: Action
                    </p>
                    <p>
                        Runtime: 90min
                    </p>
                    <p>
                        Pegi Rating: PEGI 13 <img>
                    </p>
                </article>
                <section class="text">
                        <article>
                        <p>
                                {{$movie->DescriptionLong}}
                        </p>
                        </article>
                </section>
        </section>
        <section class="specificleft">
                <img src="{{ asset('/images/Poster/'.$movie->Foto.'.jpg') }}">
                <ul class="showingdays">
                        <?php
                                $date = date('d-m-Y');
                                $weekOfdays = array();
                        ?>
                        @for ($i = 0; $i <= 6; $i++)
                        <?php $date = date('d-m-Y', strtotime('+1 day', strtotime($date)));
                        $weekOfdays[] = date('l : d F', strtotime($date)); ?>
                        @endfor

                        @foreach ($weekOfdays as $day)
                                <li>
                                {{$day}}
                                </li>
                        @endforeach
                </ul>
                <div class="orderbtn">
                        Order
                </div>
        </section>
        </div>
@endsection

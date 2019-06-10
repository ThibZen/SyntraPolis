    @if(count($movies) > 0)
        @foreach($movies as $movie)
            <div class="card p-3">
            <h3>{{$movie->Title}}</h3>
            </div>
        @endforeach
    @else
        <p>Geen films in database gevonden</p>
    @endif

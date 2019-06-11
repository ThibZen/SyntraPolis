@extends('layouts.admin')
@section('content')

@if(count($movies) > 0)
    <table border="1">
            <tr>
                <td>Title</td>
                <td>Runtime</td>
                <td>ReleaseDate</td>
                <td>Active</td>
            </tr>
        @foreach($movies as $movie)
            <tr>
                <td>{{$movie->Title}}</td>
                <td>{{$movie->Runtime}}</td>
                <td>{{$movie->ReleaseDate}}</td>
                <td>{{$movie->Active}}</td>
                <td><a href="{{route ('edit',$movie['MovieID'])}}"><button>Edit</button></a></td>
            </tr>

        @endforeach
    </table>
    @else
        <p>Geen films in database gevonden</p>
    @endif

@endsection
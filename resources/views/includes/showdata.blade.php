@extends('layouts.admin')
@section('content')

    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    ...
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-ok">Delete</a>
                </div>
            </div>
        </div>
    </div>

@if(count($data) > 0)
    <table border="1">
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Runtime</td>
                <td>ReleaseDate</td>
                <td>Active</td>
            </tr>
        @foreach($data as $movie)
            <tr>
                <td>{{$movie->id}}</td>
                <td>{{$movie->Title}}</td>
                <td>{{$movie->Runtime}}</td>
                <td>{{$movie->ReleaseDate}}</td>
                <td>{{$movie->Active}}</td>
                <td><a href="{{route ('edit',$movie->id)}}"><button>Edit</button></a></td>
                <td><a href="{{route ('delete',$movie->id)}}"><button>Delete</button></a></td>

                {{--<td><a href="#" data-href="{{route ('delete',$movie->id)}}" data-toggle="modal" data-target="#confirm-delete"><button>Delete</button></a></td>--}}
            </tr>
        @endforeach
    </table>
    @else
        <p>Geen films in database gevonden</p>
    @endif

@endsection


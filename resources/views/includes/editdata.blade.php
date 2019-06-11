@extends('layouts.admin')
@section('content')
    <form action="{{ action('DBController@editData') }}" method="post">
        <input type="hidden" name="MovieID" value="{{ ($movies) ? $movies[0]['MovieID'] : '' }}">
        @csrf
    <table border="1">
            <tr>
                <td>Title</td>
                <td><input type="text" name="title" value="{{ ($movies) ? $movies[0]['Title'] : '' }}"></td>
            </tr>
            <tr>
                <td>Short Description</td>
                <td><input type="text" name="short_descr" value="{{ ($movies) ? $movies[0]['DescriptionShort'] : '' }}"></td>
            </tr>
            <tr>
                <td>Long Description</td>
                <td><input type="text" name="long_descr" value="{{ ($movies) ? $movies[0]['DescriptionLong'] : '' }}"></td>
            </tr>
            <tr>
                <td>Runtime</td>
                <td><input type="text" name="runtime"></td>
            </tr>
            <tr>
                <td>Release Date</td>
                <td><input type="text" name="release_date"></td>
            </tr>
            <tr>
                <td>Poster Number</td>
                <td><input type="text" name="poster"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="text" name="status"></td>
            </tr>
            <tr>
                <td>IMDB Link</td>
                <td><input type="text" name="imdb"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="edit"></td>
            </tr>
        </table>
    </form>

@endsection
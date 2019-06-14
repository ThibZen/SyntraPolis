@extends('layouts.admin')
@section('content')
    <form action="{{ route('update',$movie['id']) }}" method="post">
        <input type="hidden" name="MovieID" value="{{ ($movie) ? $movie['id'] : '' }}">
        @csrf
    <table border="1">
            <tr>
                <td>Title</td>
                <td><input type="text" name="title" value="{{ ($movie) ? $movie['Title'] : '' }}"></td>
            </tr>
            <tr>
                <td>Short Description</td>
                <td><input type="text" name="short_descr" value="{{ ($movie) ? $movie['DescriptionShort'] : '' }}"></td>
            </tr>
            <tr>
                <td>Long Description</td>
                <td><input type="text" name="long_descr" value="{{ ($movie) ? $movie['DescriptionLong'] : '' }}"></td>
            </tr>
            <tr>
                <td>Runtime</td>
                <td><input type="text" name="runtime"  value="{{ ($movie) ? $movie['Runtime'] : '' }}"></td>
            </tr>
            <tr>
                <td>Release Date</td>
                <td><input type="text" name="release_date" value="{{ ($movie) ? $movie['ReleaseDate'] : '' }}"></td>
            </tr>
            <tr>
                <td>Poster Number</td>
                <td><input type="text" name="poster" value="{{ ($movie) ? $movie['Foto'] : '' }}"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="text" name="status" value="{{ ($movie) ? $movie['Status'] : '' }}"></td>
            </tr>
            <tr>
                <td>IMDB Link</td>
                <td><input type="text" name="imdb" value="{{ ($movie) ? $movie['IMDBLink'] : '' }}"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Update"></td>
            </tr>
        </table>
    </form>

@endsection
@extends('layouts.admin')
@section('content')
    <form action="{{ route('update') }}" method="post">
        <input type="hidden" name="MovieID" value="{{ ($movies) ? $movies['MovieID'] : '' }}">
        @csrf
    <table border="1">
            <tr>
                <td>Title</td>
                <td><input type="text" name="title" value="{{ ($movies) ? $movies['Title'] : '' }}"></td>
            </tr>
            <tr>
                <td>Short Description</td>
                <td><input type="text" name="short_descr" value="{{ ($movies) ? $movies['DescriptionShort'] : '' }}"></td>
            </tr>
            <tr>
                <td>Long Description</td>
                <td><input type="text" name="long_descr" value="{{ ($movies) ? $movies['DescriptionLong'] : '' }}"></td>
            </tr>
            <tr>
                <td>Runtime</td>
                <td><input type="text" name="runtime"  value="{{ ($movies) ? $movies['Runtime'] : '' }}"></td>
            </tr>
            <tr>
                <td>Release Date</td>
                <td><input type="text" name="release_date" value="{{ ($movies) ? $movies['ReleaseDate'] : '' }}"></td>
            </tr>
            <tr>
                <td>Poster Number</td>
                <td><input type="text" name="poster" value="{{ ($movies) ? $movies['Foto'] : '' }}"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="text" name="status" value="{{ ($movies) ? $movies['Status'] : '' }}"></td>
            </tr>
            <tr>
                <td>IMDB Link</td>
                <td><input type="text" name="imdb" value="{{ ($movies) ? $movies['IMDBLink'] : '' }}"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Update"></td>
            </tr>
        </table>
    </form>

@endsection
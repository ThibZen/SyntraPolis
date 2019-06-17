@extends('layouts.admin')
@section('content')

    <title>Insert Form</title>

    <form class="insertdata" action="{{ action('DBController@insert') }}" method="post">
        @csrf
        <p>
            <label for="movietitle">Movie title:</label>
            <input type="text" name="movie_title" id="movietitle">
        </p>
        <p></p>
        <p>
            <label for="shortdescr">Short description:</label>
            <input type="text" name="short_descr" id="shortdescr">
        </p>
        <p>
            <label for="longdescr">Long description:</label>
            <textarea type="text" name="long_descr" id="long_descr" rows="5" cols="50"></textarea>
        </p>
        <p>
            <label for="runtime">Runtime:</label>
            <input type="text" name="runtime" id="runtime">
        </p>
        <p>
            <label for="releasedate">Release date:</label>
            <input type="date" name="release_date" id="releasedate">
        </p>
        <p></p>
        <p>
            <label for="director">Director(s):</label>
        </p>
        <p>
            <label for="director">Firstname:</label>
            <input type="text" name="director_first" id="directorfirst">
        </p>
        <p>
            <label for="director">Lastname:</label>
            <input type="text" name="director_last" id="directorlast">
        </p>
        <p></p>
        <p>
            <label for="actor">Actor(s):</label>
        </p>
        <p>
            <label for="actor">Firstname:</label>
            <input type="text" name="actor_first" id="actorfirst">
        </p>
        <p>
            <label for="actor">Lastname:</label>
            <input type="text" name="actor_last" id="actorlast">
        </p>
        <p></p>
        <p>
                <label for="genre">Genre(s):</label>
                <select name="genre">
                    <option value="2">Action</option>
                    <option value="3">Adventure</option>
                    <option value="1">Animation</option>
                    <option value="14">Biography</option>
                    <option value="4">Comedy</option>
                    <option value="5">Crime</option>
                    <option value="18">Documentary</option>
                    <option value="10">Drama</option>
                    <option value="11">Family</option>
                    <option value="6">Fantasy</option>
                    <option value="12">Film noir</option>
                    <option value="7">History</option>
                    <option value="9">Horror</option>
                    <option value="13">Music</option>
                    <option value="8">Musical</option>
                    <option value="15">Mystery</option>
                    <option value="16">Romance</option>
                    <option value="17">Sci-fi</option>
                    <option value="19">Superhero</option>
                    <option value="20">Thriller</option>
                    <option value="21">War</option>
                    <option value="22">Western</option>
                </select>
                {{--<button name="add" id="add" class="btn btn-success">Add More</button>--}}
        </p>
        <p>
            <label for="pegi">Pegi:</label>
            <select name="pegi">
                <option value="1">Age 3</option>
                <option value="2">Age 7</option>
                <option value="3">Age 12</option>
                <option value="4">Age 16</option>
                <option value="5">Age 18</option>
                <option value="6">Bad language</option>
                <option value="7">Drugs</option>
                <option value="8">Fear</option>
                <option value="9">Gambling</option>
                <option value="10">Sexual content</option>
                <option value="11">Violence</option>
            </select>
        </p>
        <p>
            <label for="poster">Poster File Number:</label>
            <input type="text" name="poster" id="poster">
        </p>
        <p></p>
        <p>
            <label for="status">Status:</label>
            <input type="text" name="status" id="status">
        </p>
        <p>
            <label for="imdb">IMDB Link:</label>
            <input type="text" name="imdb" id="imdb">
        </p>
        <input type="submit" name="submit" value="Add">
    </form>
@endsection
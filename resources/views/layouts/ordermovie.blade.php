
@extends('layouts.default')

@section('content')
<form autocomplete="off" action="{{ route('orderStore') }}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input name="Title" id="title" type="text" placeholder="Title" autocomplete="off" value="{{ old('Title') }}"><br>

        <label for="date">Date</label>
        <input name="Date" id="date" type="text" placeholder="" autocomplete="off" value="{{ old('Date') }}"><br>

        <label for="date">Screening Time</label>
        <input name="ScreeningTime" id="screeningtime" type="text" placeholder="18:00" autocomplete="off"><br>

        <label for="title">First Name</label>
        <input name="firstname" id="firstname" type="text" placeholder="John" autocomplete="off" value="{{ old('firstname') }}"><br>

        <label for="lastname">Last Name</label>
        <input name="lastname" id="lastname" type="text" placeholder="Doe" autocomplete="off" value="{{ old('lastname') }}"><br>

        <label for="email">Email Adress</label>
        <input name="email" id="email" type="email" placeholder="john.doe@example.com" autocomplete="off" value="{{ old('email') }}"><br>

        <label for="auditorium">Auditorium</label>
        <input name="auditorium" id="auditorium" type="text" placeholder="" autocomplete="off" value="{{ old('Auditorium') }}"><br>

        <label for="tickets">Number of Tickets</label>
        <select name="tickets" id="tickets">
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
        </select><br>
        <br><br>
        <input type="submit" value="Send">
</form>
@endsection

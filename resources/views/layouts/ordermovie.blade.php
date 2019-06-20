
@extends('layouts.default')

@section('content')
<form class="orderform" autocomplete="off" action="{{ route('orderStore') }}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input name="Title" id="title" type="text" placeholder="Title" autocomplete="off" value="{{ old('Title') }}" onkeypress="return false;"><br>

        <label for="date">Date</label>
        <input name="Date" id="date" type="text" placeholder="Choose Date" autocomplete="off" value="{{ old('Date') }}"><br>

        <label for="screening_time">Screening Time</label>
        <select name="screening_time">
                <option value="1"> 17:00h </option>
                <option value="2"> 18:00h </option>
                <option value="3"> 19:00h </option>
                <option value="4"> 20:00h </option>
                <option value="5"> 21:00h </option>
        </select>

        <label for="title">First Name</label>
        <input name="firstname" id="firstname" type="text" placeholder="John" autocomplete="off" value="{{ old('firstname') }}"><br>

        <label for="lastname">Last Name</label>
        <input name="lastname" id="lastname" type="text" placeholder="Doe" autocomplete="off" value="{{ old('lastname') }}"><br>

        <label for="email">Email Adress</label>
        <input name="email" id="email" type="email" placeholder="john.doe@example.com" autocomplete="off" value="{{ old('email') }}"><br>

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

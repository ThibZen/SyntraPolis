@extends('layouts.default')

@section('content')
    <h1> Want to contact us? </h1>
    <div class="contact">
        <div class="contactform">
            @include('includes.contactform')
        </div>
        <div class="contactright">
            @include('includes.maps')
            @include('includes.contactinfo')
        </div>
    </div>
@endsection

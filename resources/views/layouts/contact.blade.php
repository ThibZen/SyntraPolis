@extends('layouts.default')

@section('content')
    <div class="contactleft">
        @include('includes.contactform')
    </div> 
    <div class="contactright">
        @include('includes.maps')
        @include('includes.contactinfo')
    </div>
@endsection

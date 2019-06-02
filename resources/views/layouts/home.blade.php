{{--@extends('layouts.default')--}}
@extends('layouts.admin')

@section('header')
    @include('includes.navbanner')
    @include('includes.botnavigation')
@endsection

@section('content')
    @include('includes.movietiles')
    @include('includes.banner')
@endsection

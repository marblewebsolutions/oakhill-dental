@extends('app', ['page_class' => 'home'])


@section('header')
    <div class="header">
        <div class="header-top fixed-top">
            <img class="logo" src="{{ asset('images/oakhilllogo.png') }}" alt="Oakhill Dental Logo">
        </div>
        <div class="header-img preload">
            <img src="{{ asset('images/pexels-photo.jpg') }}" />
        </div>
        <div class="info">
            <p>Your questions are welcome!<br> 
            Give us a call at <span class="bold">@include('partials.links.phone')</span><br>
            Or stop by our office:<br>
            <span class="bold">@include('partials.links.address')</span></p>
        </div>
    </div>
@stop


@section('main')
    <div class="block welcome">
        @include('partials.home.block-welcome')
    </div>
    
    @include('partials.call-banner')
    
    <div class="block block-video">
        @include('partials.home.block-video')
    </div>
@stop


@section('js')
    <script src="{{ url('/js/home.js') }}"></script>
@stop

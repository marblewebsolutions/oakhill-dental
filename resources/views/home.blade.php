@extends('app', ['page_class' => 'home'])


@section('header')
    <div class="header">
        <div class="header-top fixed-top">
            <img class="logo" src="{{ asset('images/ODA_logo.png') }}" alt="Oakhill Dental Logo">
        </div>
        <div class="header-img preload">
            <img src="{{ asset('images/zick-header.JPG') }}" />
        </div>
        <div class="info">
            <p>Your questions are welcome!<br> 
            Give us a call at <span class="bold">@include('partials.links.phone', ['classes' => ['underline-link']])</span><br>
            or send us an email at <span class="bold">@include('partials.links.email', ['classes' => ['underline-link']])</span><br><br>
            Stop by our office:<br>
            <span class="bold">@include('partials.links.address', ['classes' => ['underline-link']])</span></p>
        </div>
    </div>
@stop


@section('main')
    <div class="block block-promotion">
        @include('partials.home.block-promotion')
    </div>
    
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

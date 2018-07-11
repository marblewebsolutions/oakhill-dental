@extends('app', ['page_class' => 'home'])


@section('header')
    <div class="header">
        <div class="header-top fixed-top">
            <img class="logo" src="{{ asset('images/oakhilllogo.png') }}" alt="Oakhill Dental Logo">
        </div>
        <div class="header-img preload"></div>
    </div>
@stop


@section('main')
    <div class="block welcome pb-lg">
        @include('partials.home.block-welcome')
    </div>
@stop


@section('js')
    <script src="{{ url('/js/home.js') }}"></script>
@stop

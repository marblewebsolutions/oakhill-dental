@extends('app', ['page_class' => 'services', 'page_title' => 'Services'])


@section('main')
    <div class="block header pb-lg">
        @include('partials.services.block-header')
    </div>
    
    <div class="block block-services">
        @include('partials.services.block-services')
    </div>
    
    <div class="block block-testimonial">
        @include('partials.services.block-testimonial')
    </div>
@stop


@section('js')
    <script src="{{ url('/js/home.js') }}"></script>
@stop

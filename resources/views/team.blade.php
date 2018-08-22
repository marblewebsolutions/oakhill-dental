@extends('app', ['page_class' => 'team'])


@section('main')
    <div class="block block-team">
        <div class="block-content">
            <h1 class="title text-center mb-med show-on-desktop">A Lifetime of Beautiful, Healthy Smiles</h1>
            
            @include('partials.team.amber')
            @include('partials.team.bianca')
            @include('partials.team.cammie')
            @include('partials.team.cyndi')
            @include('partials.team.jenna')
            @include('partials.team.patty')
            @include('partials.team.tina')
            
            <div class="slide-controls show-on-mobile">
                <div class="arrow-left"></div>
                <p class="slide-instruction">Use the arrows to learn more about the team</p>
                <div class="arrow-right"></div>
            </div>
        </div>
    </div>
@stop


@section('js')
    <script src="{{ url('/js/team.js') }}"></script>
@stop
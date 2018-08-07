@extends('app', ['page_class' => 'team'])


@section('main')
    <div class="block block-team">
        <div class="block-content">
            <h1 class="title text-center mb-med">A Lifetime of Beautiful, Healthy Smiles</h1>
            
            @include('partials.team.amber')
            @include('partials.team.patty')
            @include('partials.team.cammie')
            @include('partials.team.bianca')
            @include('partials.team.cyndi')
            @include('partials.team.tina')
        </div>
    </div>
    
    @include('partials.call-banner')
    
    <div class="block spacer">
        <div class="block-content"></div>
    </div>
@stop


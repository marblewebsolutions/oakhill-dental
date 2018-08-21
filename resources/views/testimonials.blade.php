@extends('app', ['page_class' => 'testimonials'])


@section('main')
    <div class="block block-testimonials">
        <div class="block-content">
            <h1 class="title text-center mb-med">A Lifetime of Beautiful, Healthy Smiles</h1>
            
            <h2 class="subtitle mt-med">Testimonials</h2>
            
            <p class="description mt-sm mb-med mx-auto">See what our patients have to say about us!</p>

            <script type="text/javascript" src="https://www.practicemojo.com/cgi-bin/WebObjects/PracticeMojo.woa/wa/EmbedReviews/M-Zt8p4QuJY"></script>
                
            <button class="btn more">See More Testimonials</button>
        </div>
    </div>
@stop


@section('js')
    <script src="{{ url('/js/testimonials.js') }}"></script>

@stop


@extends('app', ['page_class' => 'services', 'page_title' => 'Services'])


@section('main')
    @include('partials.nav', ['active' => 'services'])
    
    <div class="block header pb-lg">
        <div class="block-content">
            <div class="split-2 text-center">
                <div class="text-cont">
                    <p class="mb-med">Oakhill Dental Associates provides a wide range of dental 
                    services. Our practice incorporates <b>Preventative</b> care and 
                    specializes in <b>Restorative</b> and <b>Esthetic</b> 
                    dentistry.</p>
    
                    <p>Find out more below!<br>
                    <b>We look forward to providing you and your family with quality 
                    care.</b></p>
                </div>
            </div><div class="split-2">

            </div>
        </div>
        
        <div class="banner">
            <h3>Reach out to schedule an appointment <a class="btn ml-sm" href="#">CALL</a></h3>
        </div>
    </div>
    
    <div class="block block-services">
        <div class="block-content">
            <div class="tiles">
                <div class="tile preload">
                    <div class="tile-title"><h3>REGULAR CLEANING</h3></div>
                </div>
                <div class="tile preload">
                    <div class="tile-title"><h3>WHITENING</h3></div>
                </div>
                <div class="tile preload">
                    <div class="tile-title"><h3>SLEEP & SNORING THERAPIES</h3></div>
                </div>
                <div class="tile preload">
                    <div class="tile-title"><h3>FULL-MOUTH REHABILITATION</h3></div>
                </div>
                <div class="tile preload">
                    <div class="tile-title"><h3>CROWNS</h3></div>
                </div>
                <div class="tile preload">
                    <div class="tile-title"><h3>PORCELAIN VENEERS</h3></div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="block block-testimonial">
        <div class="block-content">
            <div class="text-cont">
                <p class="quote text-center">"I have always had apprehension when going to the dentist. 
                Once I started seeing Dr. Zick and the wonderful staff, they put 
                my anxiety to rest. Thank you all!"</p>
                <p class="reviewer">- Jonathon S</p>
            </div>
            <a class="btn" href="#">SEE MORE TESTIMONIALS</a>
        </div>
    </div>
@stop


@section('js')
    <script src="{{ url('/js/home.js') }}"></script>
@stop

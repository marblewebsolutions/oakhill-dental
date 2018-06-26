@extends('app', ['page_class' => 'services'])


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
                <h3>Welcome to the Oakhill Dental Associates Website!</h3>
                
                <p class="mt-med">We hope you explore our site to learn about our practice. We 
                believe that informed patients are the most successful in their 
                journey to a healthy smile. We are here to assist you in that 
                journey.</p>
                
                <p class="mt-med">Delta Dental is committed to excellence, compassion, and building 
                lifelong relationships with our patient family. Since oral care 
                is an important part of your overall wellness we provide a full 
                range of dental services to help you achieve your optimal 
                health. These services include preventive, cosmetic and 
                restorative dentistry as well as treatment of snoring and sleep 
                apnea with dental appliance therapy.</p>
                
                <p class="mt-med">We are proud that our practice focuses on not only creating 
                beautiful smiles but also has expertise in solving complex jaw 
                joint problems for a lifetime of beautiful and healthy smiles.</p>
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

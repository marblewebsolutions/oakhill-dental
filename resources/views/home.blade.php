@extends('app', ['page_class' => 'home'])


@section('main')
    <div class="header">
        <div class="header-top"><h1>Delta Dental</h1></div>
        <div class="header-img preload"></div>
    </div>

    @include('partials.nav', ['active' => 'home'])
    
    <div class="block welcome pb-lg">
        <div class="block-content">
            <div class="split-2">
                <h2>Left</h2>
            </div><div class="split-2 text-center">
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
            
            <h3 class="bottom-text mt-med mx-auto text-center">For over 25 years Dr. Daniel Zick and his team have been 
            delivering exceptional dental care to the Greater Lansing Michigan 
            area.</h3>
        </div>
        
        <div class="banner">
            <h3>Reach out to schedule an appointment <a class="btn ml-sm" href="#">CALL</a></h3>
        </div>
    </div>
@stop


@section('js')
    <script src="{{ url('/js/home.js') }}"></script>
@stop

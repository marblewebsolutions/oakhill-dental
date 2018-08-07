@extends('app', ['page_class' => 'dr'])


@section('main')
    <div class="block">
        <div class="block-content">
            <h1 class="title text-center mb-med">A Lifetime of Beautiful, <br class="show-on-mobile"> Healthy Smiles</h1>
            
            <div class="photo-container split-2 mb-med">
                <div class="img-bg"></div>
                <img src="{{ asset('images/profiles/dr-zick.png') }}" alt="Dr. Zick">
            </div><div class="top-text-container split-2 mb-med">
                <p class="mb-sm">Dr Zick, a native of East Lansing Michigan, graduated in 1981 
                from Michigan State University with an undergraduate degree in Human 
                Physiology.</p>
                
                <p class="mb-sm">He then attended University of Michigan Dental School graduating 
                in 1985 earning his Doctor of Dental Surgery.</p>
                
                <p class="mb-sm">He is a member of the American Dental Association, The Michigan 
                Dental Association and the Central District Dental Association.</p>
                
                <p>He has been a lifelong student at the Dawson Center for Advanced 
                Dental Study and is passionate about contemporary dental occlusal 
                concepts.</p>
            </div>
            
            <div class="show-on-mobile">
                <hr class="spacer">
            </div>
            
            <div>
                <p class="mb-sm">Dr. Zick’s dentistry extends far beyond making beautiful smiles. 
                Combining the functional as well as the aesthetic, he provides each 
                and every patient with dental care that will improve the quality of 
                their life. Dr. Zick has a teacher’s heart. He enjoys teaching 
                dental students and team members.</p>
                
                <p class="mb-sm">Often times resolving complex dental issues may require a team of 
                professionals. Dr. Zick will combine his skills and expertise with 
                an outstanding group of Doctors who specialize in their field. In 
                collaboration with these doctors you will receive optimal oral 
                health and the personalized care that you deserve.</p>
                
                <p>His family includes wife Jan and two children. Outside of 
                dentistry Dr. Zick enjoys water and snow sports, handball, golf and 
                spending time with friends and family.</p>
            </div>
        </div>
    </div>
    
    @include('partials.call-banner')
    
    <div class="block spacer">
        <div class="block-content"></div>
    </div>
@stop


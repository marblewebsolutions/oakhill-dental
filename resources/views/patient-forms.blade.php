@extends('app', ['page_class' => 'patient-forms'])


@section('main')
    <div class="block block-forms">
        <div class="block-content">
            <h1 class="title text-center mb-med">A Lifetime of Beautiful, <br class="show-on-mobile"> Healthy Smiles</h1>

            <h2>OAKHILL DENTAL PATIENT FORMS & INFORMATION</h2>
            
            <p class="description mt-sm mx-auto">For your convenience, Oakhill Dental now offers Dentrix automated 
            online patient forms & information. Click on a link below to get started.</p>
            
            <div class="form-buttons mt-med">
                <p><a class="btn form-button" href="https://www.ident.ws/template_include/new_patient_sign_in.do?site=13090&practiceId=41419" target="_blank">NEW PATIENT QUESTIONNAIRES</a></p>
                <p class="mt-sm"><a class="btn form-button" href="{{ asset('pdf/RECORD-RELEASE-TO-PATIENT.pdf') }}" target="_blank">RECORD RELEASE TO PATIENT</a></p>
                <p class="mt-sm"><a class="btn form-button" href="{{ asset('pdf/RECORD-RELEASE-TO-THIRD-PARTY.pdf') }}" target="_blank">RECORD RELEASE TO THIRD PARTY</a></p>
            </div>
        </div>
    </div>
    
    @include('partials.call-banner', ['text' => 'Our team is here if you have any questions'])
    
    <div class="block spacer">
        <div class="block-content"></div>
    </div>
@stop


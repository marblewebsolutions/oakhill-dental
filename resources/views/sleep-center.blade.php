@extends('app', ['page_class' => 'sleep-center'])


@section('main')
    <div class="block block-forms">
        <div class="block-content">
            <h1 class="title text-center mb-med">A Lifetime of Beautiful, <br class="show-on-mobile"> Healthy Smiles</h1>

            <p class="mt-med">Patients with chronic snoring and mild to moderate sleep apnea can beneAit greatly from the
            appliances offered in our center. Although traditional breathing devices (CPAP) are the gold standard
            for sleep disorders, often patients are unable to tolerate the device. We have been providing oral sleep
            appliance care for nearly 15 years, achieving a 90% reduction of snoring and sleep apnea.</p>
            
            <div class="video-container mt-med">
                <div class="video-wrapper">
                    <div class="img-bg"></div>
                    <iframe width="690" height="388" src="https://www.youtube.com/embed/YZYg62CIlSY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
    
            <div class="treatment-procedure mt-med">
                <h2>TREATMENT PROCEDURE</h2>
                <div class="col">
                    <h2>1st Visit</h2>
                    <ul>
                        <li>Examination & Consultation</li>
                        <li>Jaw Joint X-Rays</li>
                        <li>Dental Impressions</li>
                        <li>Possible Trial Appliance</li>
                    </ul>
                </div>
                <div class="col">
                    <h2>2nd Visit</h2>
                    <ul>
                        <li>Delivery of appliance and care Instructions</li>
                    </ul>
                    
                    <h2 class="mt-med">1 Month</h2>
                    <ul>
                        <li>Post Treatment and referral for Ainal sleep center evaluation.</li>
                    </ul>
                </div>
            </div>
            
            <h2 class="mt-med text-left">INSURANCE AND FEES</h2>
            <p class="mt-sm">With proper sleep studies and physician referral letters, most 
            medical health insurance companies cover a portion of the costs of 
            Dental Appliance Therapy for the treatment of obstructive sleep apnea. 
            These companies generally do not allow coverage for treatment of 
            snoring only. Our office will assist the patient with medical insurance 
            claims. Dental insurance coverage is not available for this service. 
            The patient is responsible for the entire fee at the time of the appliance 
            delivery. Our Center has interest free financing plans available. 
            Visa and MasterCard are accepted.</p>
            
            <h2 class="mt-med text-left">CONCLUSION</h2>
            <p class="mt-sm">In clinical studies, physicians and dentists have found that 
            Dental Sleep Appliance Therapy in experienced hands can dramatically 
            aid in the reduction of apnea events and snoring. Oakhill Dental's 
            Center for Sleep Appliance Therapy offers you confidence that 
            experienced professionals understand the significance of sleep 
            disorders and the proper protocol for treatment.</p>
        </div>
    </div>
    
    @include('partials.call-banner')
    
    <div class="block spacer">
        <div class="block-content"></div>
    </div>
@stop


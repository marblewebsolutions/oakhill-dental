<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('home');
    } 
    
    public function dr() {
        return view('dr');
    }
    
    public function team() {
        return view('team');
    }
    
    public function services() {
        return view('services');
    }
    
    public function sleepCenter() {
        return view('sleep-center');
    }

    public function patientForms() {
        return view('patient-forms');
    }
    
    public function financial() {
        return view('financial');
    }
    
    public function testimonials() {
        return view('testimonials');
    }
}

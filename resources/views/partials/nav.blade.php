<nav class="nav-mobile">
    <ul class="nav-links">
        <li class="nav-link {{ ($active == 'home' ? 'active' : '') }}"><a class="underline-link" href="{{ url('/') }}">Home</a></li>
        <li class="nav-link {{ ($active == 'dr' ? 'active' : '') }}"><a class="underline-link" href="{{ url('dr') }}">Dr. Zick</a></li>
        <li class="nav-link {{ ($active == 'team' ? 'active' : '') }}"><a class="underline-link" href="{{ url('the-team') }}">The Team</a></li>
        <li class="nav-link {{ ($active == 'services' ? 'active' : '') }}"><a class="underline-link" href="{{ url('services') }}">Services</a></li>
        <li class="nav-link {{ ($active == 'sleep-center' ? 'active' : '') }}"><a class="underline-link" href="{{ url('sleep-center') }}">Sleep Center</a></li>
        <li class="nav-link {{ ($active == 'patient-forms' ? 'active' : '') }}"><a class="underline-link" href="{{ url('patient-forms') }}">Patient Forms</a></li>
        <li class="nav-link {{ ($active == 'financial' ? 'active' : '') }}"><a class="underline-link" href="{{ url('financial-info') }}">Financial Info</a></li>
        <li class="nav-link {{ ($active == 'testimonials' ? 'active' : '') }}"><a class="underline-link" href="{{ url('testimonials') }}">Testimonials</a></li>
    </ul>
</nav>

<nav class="nav {{ ($active == 'home' ? 'relative' : '') }}">
    <ul class="nav-links">
        <li class="nav-link {{ ($active == 'home' ? 'active' : '') }}"><a class="underline-link" href="{{ url('/') }}">Home</a></li>
        <li class="nav-link {{ ($active == 'dr' ? 'active' : '') }}"><a class="underline-link" href="{{ url('dr') }}">Dr. Zick</a></li>
        <li class="nav-link {{ ($active == 'team' ? 'active' : '') }}"><a class="underline-link" href="{{ url('the-team') }}">The Team</a></li>
        <li class="nav-link {{ ($active == 'services' ? 'active' : '') }}"><a class="underline-link" href="{{ url('services') }}">Services</a></li>
        <li class="nav-link {{ ($active == 'sleep-center' ? 'active' : '') }}"><a class="underline-link" href="{{ url('sleep-center') }}">Sleep Center</a></li>
        <li class="nav-link {{ ($active == 'patient-forms' ? 'active' : '') }}"><a class="underline-link" href="{{ url('patient-forms') }}">Patient Forms</a></li>
        <li class="nav-link {{ ($active == 'financial' ? 'active' : '') }}"><a class="underline-link" href="{{ url('financial-info') }}">Financial Info</a></li>
        <li class="nav-link {{ ($active == 'testimonials' ? 'active' : '') }}"><a class="underline-link" href="{{ url('testimonials') }}">Testimonials</a></li>
    </ul>
    
    <div class="mobile-content">
        <div class="left">
            <a href="tel:5174844455">
                <i class="material-icons">phone</i>
            </a>
        </div>
        
        <div class="center">
            <img src="{{ asset('images/oakhilllogo.png') }}" alt="Oakhill Dental">
        </div>
        
        <div class="right">
            <div class="mobile-nav-toggle">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </div>
</nav>

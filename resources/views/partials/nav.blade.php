<nav class="nav">
    <ul class="nav-links">
        <li class="nav-link {{ ($active == 'home' ? 'active' : '') }}"><a class="underline-link" href="{{ url('/') }}">Home</a></li>
        <li class="nav-link"><a class="underline-link" href="#">Dr. Zick</a></li>
        <li class="nav-link"><a class="underline-link" href="#">The Team</a></li>
        <li class="nav-link {{ ($active == 'services' ? 'active' : '') }}"><a class="underline-link" href="{{ url('services') }}">Services</a></li>
        <li class="nav-link"><a class="underline-link" href="#">Sleep Center</a></li>
        <li class="nav-link"><a class="underline-link" href="#">Patient Forms</a></li>
        <li class="nav-link"><a class="underline-link" href="#">Financial Info</a></li>
        <li class="nav-link"><a class="underline-link" href="#">Testimonials</a></li>
    </ul>
</nav>

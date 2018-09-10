<footer class="footer">
    <div class="footer-items">
        <div class="footer-item">
            <h3>Visit Us</h3>
            <p><b>Hours:</b> Mon - Fri: 8am - 5pm</p>
            <p><b>Location:</b> @include('partials.links.address', ['classes' => ['underline-link']])</p>
        </div>
        
        <div class="footer-item">
            <h3>Contact Us</h3>
            <p>@include('partials.links.email', ['classes' => ['underline-link']])</p>
            <p>@include('partials.links.phone', ['classes' => ['underline-link']])</p>
        </div>
    </div>
    
    <div class="mws-credit">
        <p><a href="https://marblewebsolutions.com" target="_blank">Designed by <span class="blue">Marble</span> <span class="orange">Web Solutions</span> <span class="blue">LLC</span></a></p>
    </div>
</footer>

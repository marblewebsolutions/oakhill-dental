<footer class="footer">
    <div class="footer-items">
        <div class="footer-item">
            <h3>Hours:</h3>
            <p>Mon: 10am - 5pm</p>
            <p>Tues - Friday: 8am - 5pm</p>
            
            <h3 class="mt-xs">Location:</h3>
            <p>@include('partials.links.address', ['classes' => ['underline-link']])</p>
        </div>
        
        <div class="divider show-on-mobile mx-auto"></div>
        
        <div class="footer-item">
            <p><i class="material-icons">email</i> @include('partials.links.email', ['classes' => ['underline-link']])</p>
            <p><i class="material-icons">phone</i> @include('partials.links.phone', ['classes' => ['underline-link']])</p>
        </div>
    </div>
    
    <div class="mws-credit">
        <p><a href="https://marblewebsolutions.com" target="_blank">Designed by<br> <span class="blue">Marble</span> <span class="orange">Web Solutions</span> <span class="blue">LLC</span></a></p>
    </div>
</footer>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141665517-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-141665517-1');
    </script>
    
    <title>{{ (!empty($page_title) ? $page_title . ' | ' : '') }} Oakhill Dental Associates P.L.L.C.</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO -->
    <meta name="description" content="Family Dentistry in Lansing, Mi., Dentist Dr. Daniel Zick DDS, Dentistry, Oakhill Dental Associates on Lake Lansing Rd., Lansing.">
    <meta name="keywords" content="Oakhill, Dental, Dentist, Lansing, Zick">

    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <!-- Pixel -->
    <script async src='https://tag.simpli.fi/sifitag/5e252380-6877-0137-e644-06a9ed4ca31b'></script>
    
    <!-- Facebook Pixel Code --> 
    <script> !function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window, document,'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '159638121301424'); fbq('track', 'PageView'); </script> <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=159638121301424&ev=PageView& noscript=1" /></noscript> 
</head>
<body>
    <div class="view {{ strtolower($page_class) }}">
        @yield('header')
        
        @include('partials.nav', ['active' => $page_class])
        
        <div class="main">
            @yield('main')
        </div>

        @include('partials.footer')
        
        @yield('modal')
    </div>

    @hasSection('js')
        @yield('js')
    @else
        <script src="{{ url('js/app.js') }}"></script>
    @endif
</body>
</html>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ (!empty($page_title) ? $page_title . ' | ' : '') }} Oakhill Dental Associates P.L.L.C.</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO -->
    <meta name="description" content="Family Dentistry in Lansing, Mi., Dentist Dr. Daniel Zick DDS, Dentistry, Oakhill Dental Associates on Lake Lansing Rd., Lansing.">
    <meta name="keywords" content="Oakhill, Dental, Dentist, Lansing, Zick">

    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141665517-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-141665517-1');
    </script>
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

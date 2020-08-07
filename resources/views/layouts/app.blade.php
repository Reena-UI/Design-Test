<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', '') }}</title>

      

   

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    </head>
    <body>
        @include('layouts.inc.nav')
        @yield('content')
         @include('layouts.inc.footer')
        
  
         <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="https://unpkg.com/webp-hero@0.0.0-dev.21/dist-cjs/polyfills.js"></script>
<script src="https://unpkg.com/webp-hero@0.0.0-dev.21/dist-cjs/webp-hero.bundle.js"></script>
   
    <script>
        $( document ).ready(function() {
$('#Market_list').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:false,
    autoplay:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            
        },
        600:{
            items:2,
            
        },
        900:{
            items:3,
           
        },
        1000:{
            items:4,
           
        }
    }
})
$('#Trader_list').owlCarousel({
    loop:true,
    margin:30,
    dots:false,
    nav:false,
    autoplay:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            
        },
        600:{
            items:3,
            
        },
        900:{
            items:4,
           
        },
        1000:{
            items:6,
           
        }
    }
})
});
var webpMachine = new webpHero.WebpMachine();
 webpMachine.polyfillDocument();
    </script>
    </body>
</html>

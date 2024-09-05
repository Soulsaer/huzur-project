<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    @yield('meta_tags')
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/assets/css/main.css?v=111') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/images/fav_logo.png') }}" />

    <link rel="canonical" href="{{ URL::current() }}"/>
    <link rel="alternate" href="{{ URL::current() }}" hreflang="en-gb" />

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Huzurr Jewelry: Let's Your Style Shine",
      "alternateName": "Huzurr",
      "url": "https://www.huzurr.com/",
      "image": "https://www.huzurr.com/slider_image/1702030635.png",
      "logo": "https://www.huzurr.com/assets/images/logo.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91 9610000114",
        "contactType": "customer service",
        "areaServed": "WorldWide",
        "availableLanguage": "en"
      },
      "sameAs": [
      "https://www.facebook.com/huzurrjewelry/",
      "https://twitter.com/huzurrjewelry",
      "https://www.instagram.com/huzurrjewels",
      "https://www.youtube.com/@Huzurrjewelry",
      "https://www.linkedin.com/company/huzurr/",
      "https://www.pinterest.com/huzurr09/",
      "https://www.etsy.com/shop/bluemoonsilvergifts"
      ]
    }
    </script>

    @yield('other_tags')


    <meta name="p:domain_verify" content="4113c8cd1b39c521530d37ab5db4109a"/>
    <!--Google Console Code-->
    <meta name="google-site-verification" content="vJVasvISjPAQeWRqqtdZTedwbgjH3tGjum87aZ5hmNU" />

    @yield('style')
    <!--Google Analytics-->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JR4R7XP3WR"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-JR4R7XP3WR');
    </script>
  
</head>
<body>
    <div id="preloader"></div>
    <div id="app">
        
        <!-- <main class="py-4"> -->
            @include('layouts.header')
            @yield('content')
            @include('layouts.footer')
        <!-- </main> -->
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
        </script> -->
    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function () {
            loader.style.display = "none";
        })
    </script>
    @yield('js')
</body>
</html>

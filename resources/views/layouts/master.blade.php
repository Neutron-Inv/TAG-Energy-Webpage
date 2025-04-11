<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="TAG Energy Group provides expert solutions in oil & gas, valve maintenance, engineering, and industrial procurement. Delivering excellence in energy services.">
    <meta name="keywords" content="TAG Energy, oil and gas services in Nigeria, valve maintenance, industrial procurement, supply chain management, engineering solutions, energy services, Nigeria oil and gas, valve repair, project management, energy solutions, Manpower support, flange management in nigeria, Flange management, local content in Nigeria, local content, procurement of valves in nigeria, procurement for oil and gas nigeria">
    <meta name="author" content="TAG Energy Group">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="TAG Energy Group - Reliable, Dependable">
    <meta property="og:description" content="Expert solutions in oil & gas, valve maintenance, engineering, and procurement services tailored for optimal performance and efficiency.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.tagenergygroup.net"> <!-- Replace with actual URL -->
    <meta property="og:image" content="https://www.tagenergygroup.net/images/og-image.jpg"> <!-- Replace with actual image URL -->
    <meta property="og:locale" content="en_NG">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TAG Energy Group - Reliable, Dependable">
    <meta name="twitter:description" content="Delivering innovative and reliable oil & gas services, valve maintenance, and industrial procurement solutions.">
    <meta name="twitter:image" content="https://www.tagenergygroup.net/images/og-image.jpg"> <!-- Replace with actual image URL -->
    <meta name="twitter:site" content="@TAGEnergygroup"> <!-- Replace with actual Twitter handle -->
    <meta name="robots" content="index, follow">
    <meta name="google-site-verification" content="your-google-verification-code"> <!-- Replace with your verification code -->
    <meta name="bing-site-verification" content="your-bing-verification-code"> <!-- Replace with your verification code -->


  <title>@yield('title') | {{config('app.name')}}</title>

  <link rel="apple-touch-icon" type="image/png" href="{{ load_asset('images/favicon/logo-180x180.png') }}" sizes="180x180">
  <link rel="icon" type="image/png" href="{{ load_asset('images/favicon/logo-32x32.png') }}" sizes="32x32">
  <link rel="icon" type="image/png" href="{{ load_asset('images/favicon/logo-16x16.png') }}" sizes="16x16">
  
  <link rel="stylesheet" href="{{ load_asset('css/bootstrap.min.css') }}" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Philosopher:200,300,400,500,600,700,800" rel="stylesheet" />
  <link rel="stylesheet" href="{{ load_asset('css/all.css') }}">
  <link rel="stylesheet" href="{{ load_asset('css//font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ load_asset('css/style.css') }}" />
  <link rel="stylesheet" href="{{ load_asset('css/sm-clean.css') }}">
  <link rel="stylesheet" href="{{ load_asset('css/sm-core-css.css') }}" />
  <link rel="stylesheet" href="{{ load_asset('css/owl.carousel.css') }}" />
  <link rel="stylesheet" href="{{ load_asset('css/owl.theme.default.css') }}" />
  <link rel="stylesheet" href="{{ load_asset('css/grt-youtube-popup.css') }}" />
  <link rel="stylesheet" href="{{ load_asset('css/lightbox.css') }}" />
  <link rel="stylesheet" href="{{ load_asset('css/responsive.css') }}" />

  <!-- Toast CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
  <script src="{{ load_asset('js/jquery.min.js') }}"></script>

  @yield('header_scripts')

</head>
<body>

  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          @include('partials.nav')
        </div>
      </div>
    </div>
  </header>
         
  @yield('content')
          
  @include('partials.footer')
  
  <!-- scroll_to_top start --> 
    <a href="#" class="scrollToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a> 
  <!-- scroll_to_top end --> 

  <!-- jQuery --> 
  {{-- <script src="{{ load_asset('js/jquery.min.js') }}"></script> --}}

  <!-- Bootstrap --> 
  <script src="{{ load_asset('js/modernizr.min.js') }}"></script> 
  <script src="{{ load_asset('js/bootstrap.min.js') }}"></script> 

  <!-- projects--> 
  <script src="{{ load_asset('js/Isotope.js') }}"></script> 
  <script src="{{ load_asset('js/MagnificPopup.js') }}"></script> 

  <!-- header menu --> 
  <script src="{{ load_asset('js/jquery.smartmenus.min.js') }}"></script> 

  <!-- carousel slider --> 
  <script src="{{ load_asset('js/owl.carousel.js') }}"></script> 

  <!-- Testimonials slider --> 
  <script src="{{ load_asset('js/cascade-slider.js') }}"></script> 

  <!-- youtube video --> 
  <script src="{{ load_asset('js/grt-youtube-popup.js') }}"></script> 

  <!-- images popup --> 
  <script src="{{ load_asset('js/lightbox.js') }}"></script> 

  <!-- Global Init --> 
  <script src="{{ load_asset('js/custom.js') }}"></script>
  
  <!-- Toast Messages -->   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
  @include('partials.alerts')
  @yield('footer_scripts')

</body>

</html>
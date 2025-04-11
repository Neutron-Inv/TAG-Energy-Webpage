@extends ('layouts.master')
@section ('title','Home')
@section('header_scripts')
  <link rel="stylesheet" href="{{ load_asset('css/infinite-slider.css') }}" />
  {{-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> --}}
@endsection
@section ('content')
    
  @include ('partials.carousel')
  @include ('partials.whyus')
  @include ('partials.services')

@endsection
@section('footer_scripts')
  @include('partials.partner-slider')
@endsection
@extends('layouts.master')
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript --> --}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link href="{{load_asset('display/css/style.css')}}" rel="stylesheet"> 
@section ('title','Our Gallery')
@section('content')


    <div class="carousel-item active" style="background-image: url({{load_asset('images/team-bg.jpg')}}); background-size:cover; height:250px; width:100%;">
        <div class="carousel-caption1">
            <h2>Our Gallery</h2>    
        </div>
    </div>


    <section class="portfolio_area"> 
        <div class="container" style="margin-top: 200px;"> 
             
             <div class="row portfoli_inner pi_2"> 
                <!--@foreach ($gallery as $item)-->
                <!--    <div class="col-lg-4 col-md-6 personal debt home other"> -->
                <!--        <div class="portfolio_item">-->
                <!--            <a href="" class="portfolio_img">-->
                <!--                <img src="{{ asset('post/'.$item->file) }}" alt="" style="width: 370px; height: 247px;">-->
                                
                <!--            </a>-->
                <!--            <div class="portfolio_content">-->
                <!--                <a href="" class="heding">{{ $item->heading ?? '' }}</a>-->
                                
                <!--            </div>-->
                <!--        </div> -->
                <!--    </div> -->
                 
                <!--@endforeach -->
             </div>  
        </div>
     </section>

@endsection

<script src="{{load_asset('display/js/jquery-3.3.1.min.js')}}"></script> 
    
<script src="{{load_asset('display/vendors/animate-css/wow.min.js')}}"></script> 
<script src="{{load_asset('display/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script> 
<script src="{{load_asset('display/vendors/isotope/isotope.pkgd.min.js')}}"></script> 
<script src="{{load_asset('display/js/theme.js')}}"></script>
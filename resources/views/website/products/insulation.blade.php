@extends('layouts.master')
@section ('title','Insulation Products')
@section('content')

<!-- /page_banner start-->
<div class="carousel-item active" style="background-image: url({{load_asset('images/insulation-bg.jpg')}}); background-size:cover; height:250px; width:100%;">
  <div class="carousel-caption1">
    <h2>Insulation Products</h2>    
  </div>
</div>
<!-- /page_banner end--> 

<!-- /about_con start-->
<section class="about_page">
  <div class="container">
    <div class="row">      
      <div class="col-lg-12 col-md-12">
        {{-- <div class="about_page_con">
          <h2>Service Overview</h2>
          <div class="about_border"></div>
        </div> --}}
        <div class="about_pages_con">
          {{-- <p>TAG Energy has partnered with ROCKWOOL Technical Insulation, a division of ROCKWOOL Group and the world’s largest stone wool manufacturer to distribute and install durable and sustainable stone wool insulation products in the Nigerian market.</p>
          <p>ROCKWOOL products include the popular ProRox and SeaRox and a full range of high-quality insulation products suitable for industrial application in the offshore, marine, petrochemical, and power industries. ROCKWOOL Technical Insulation products are created from stone wool, a material that cannot burn and the ability to withstand temperatures of up to 1000o C, offering the highest protection against fire, corrosion, noise, moisture, and other undesirable conditions.</p>
          <p>TAG Energy’s appointment as ROCKWOOL Group in-country distribution partner is designed to ensure the on-time delivery of high quality insulation products and services to your location in a safe, environmentally friendly and cost effective manner.</p> --}}
         <p>TAG Energy Insulation products are created from stone wool with ability to withstand temperatures of up to 1000&#176;C, and cannot ignite or burn in the case of fire outbreak. This offers the highest protection against fire, corrosion, noise, moisture, and other undesirable conditions.</p>
         <p>Our products includes a full range of durable and high-quality insulation products suitable for industrial application in the offshore, marine, petrochemical, and power industries.</p>
          <br>
        </div>
      </div>
      {{-- <div class="col-lg-3" style="text-align: center">  
        <img class="img-fluid" src="{{load_asset('images/shop/insulating.png')}}" alt="insulation 1 image">
      </div>
      <div class="col-lg-3" style="text-align: center">  
        <img class="img-fluid" src="{{load_asset('images/shop/insulating-2.jpg')}}" alt="insulation 2 image">
      </div> --}}
    </div>
  </div>
</section>
<!-- /about_con end--> 
<br><br><br><br>

@endsection
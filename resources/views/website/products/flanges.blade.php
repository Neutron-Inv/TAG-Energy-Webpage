@extends('layouts.master')
@section ('title','Flange Products')
@section('content')

<!-- /page_banner start-->
<div class="carousel-item active" style="background-image: url({{load_asset('images/flange-bg.jpg')}}); background-size:cover; height:250px; width:100%;">
  <div class="carousel-caption1">
    <h2>Flange Products</h2>    
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
          <p>TAG Energy distributes a variety of standard and special flanges in wide array of materials such as Alloy Steel, Carbon Steel, Stainless Steel, and other materials from manufacturing partners all over the world. These flanges are used in the offshore, petrochemical, wind power, and ship building industries. Our manufacturers are on the Approved Manufacturer’s List (AML) of all the major International Oil Companies including Shell, Exxon Mobil, and Total.</p>
          <p>We specialize in:</p>
          <ul style="list-style-type: none; padding-left: 20px; text-align:left">
            <li style="margin-bottom: 5px;"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Orifice flanges with plates if needed</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;RTJ (Ring Type Joint) facing</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Reducing flanges with hubs</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;API, MSS, AWWA</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Spectacle blinds</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Long weld neck flanges</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Metric flanges and spacers</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Large OD (Outside Diameter) flanges</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Standard slip-on, blind, weld neck, Socket weld, threaded, and lap joint flanges</li>
          </ul>
          <br>
        </div>
      </div>
      {{-- <div class="col-lg-3" style="text-align: center">  
        <img class="img-fluid" src="{{load_asset('images/shop/flange-1.png')}}" alt="Flange 1 image">
      </div>
      <div class="col-lg-3" style="text-align: center">  
        <img class="img-fluid" src="{{load_asset('images/shop/flange-2.png')}}" alt="Flange 2 image">
      </div>
      <div class="col-lg-3" style="text-align: center">  
        <img class="img-fluid" src="{{load_asset('images/shop/flange-3.png')}}" alt="Flange 3 image">
      </div>
      <div class="col-lg-3" style="text-align: center">  
        <img class="img-fluid" src="{{load_asset('images/shop/flange-4.png')}}" alt="Flange 4 image">
      </div> --}}
    </div>
  </div>
</section>
<!-- /about_con end--> 
<br><br><br>

@endsection
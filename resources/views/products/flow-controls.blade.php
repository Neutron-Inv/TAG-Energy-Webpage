@extends('layouts.master')
@section ('title','Flow Control Products')
@section('content')

<!-- /page_banner start-->
<div class="carousel-item active" style="background-image: url({{load_asset('images/flow-control-bg2.jpg')}}); background-size:cover; height:250px; width:100%;">
  <div class="carousel-caption1">
    <h2>Flow Control Products</h2>    
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
          <p>TAG Energy Flow Control offers you an unprecedented product assortment and turnkey solutions. We have partnered with well-known and established manufacturers of industrial valves of various sizes and materials including butterfly valves, check valves, globe valves, and gate valves, all suitable for diverse applications in the energy industry amongst others. </p>
          <p>Our partners are carefully selected on their ability to meet the most stringent quality standards, track record and commitment to meeting and exceeding customer expectations.</p>
          <p>TAG Flow Control has a well-established project management organization which can fully support the total complexity of large industrial projects, in all the different stages of the process such as specialized document handling systems, co-engineering, FAT etc. Benefit from our in-depth application knowledge gained over many years in the business and reduce costs throughout your supply chain.</p>
          <br>
        </div>
      </div>
      {{-- <div class="col-lg-3" style="text-align: center">  
        <img class="img-fluid" src="{{load_asset('images/shop/flow-5.png')}}" alt="Flow 1 image">
      </div>
      <div class="col-lg-3" style="text-align: center">  
        <img class="img-fluid" src="{{load_asset('images/shop/flow-2.png')}}" alt="Flow 2 image">
      </div>
      <div class="col-lg-3" style="text-align: center">  
        <img class="img-fluid" src="{{load_asset('images/shop/flow-3.png')}}" alt="Flow 3 image">
      </div>
      <div class="col-lg-3" style="text-align: center">  
        <img class="img-fluid" src="{{load_asset('images/shop/flow-4.png')}}" alt="Flow 4 image">
      </div> --}}
    </div>
  </div>
</section>
<!-- /about_con end--> 
<br><br><br>

@endsection
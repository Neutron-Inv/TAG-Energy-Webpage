@extends('layouts.master')
@section ('title','Pipe and Pipe Fitting Products')
@section('content')

<!-- /page_banner start-->
<div class="carousel-item active" style="background-image: url({{load_asset('images/pipe-bg.jpg')}}); background-size:cover; height:250px; width:100%;">
  <div class="carousel-caption1">
    <h2>Pipe and Pipe Fitting Products</h2>    
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
          <p>TAG Energy is focused on the supply and delivery of pipes and fittings used in the upstream oil and gas industry. Commonly required pipe materials include carbon, alloy, stainless steels, and other specialty materials.  We also specialize in seamless steel pipes, butt weld pipe fittings, socket weld fittings, elbows of various radius, threated fittings, reducers, flanges and tee and steel fittings. We take pride in our ability to supply from where quality, safety, and reliability are key in the manufacturing process. </p>
          <br>
        </div>
      </div>      
      {{-- <div class="col-lg-3" style="text-align: center">  
        <img class="img-fluid" src="{{load_asset('images/shop/pipe-1.png')}}" alt="Pipe 1 image">
      </div>
      <div class="col-lg-3" style="text-align: center">  
        <img class="img-fluid" src="{{load_asset('images/shop/pipe-2.png')}}" alt="Pipe 2 image">
      </div>
      <div class="col-lg-3" style="text-align: center">  
        <img class="img-fluid" src="{{load_asset('images/shop/pipe-3.png')}}" alt="Pipe 3 image">
      </div>
      <div class="col-lg-3" style="text-align: center">  
        <img class="img-fluid" src="{{load_asset('images/shop/pipe-4.png')}}" alt="Pipe 4 image">
      </div> --}}
    </div>
  </div>
</section>
<!-- /about_con end--> 
<br><br><br>

@endsection
@extends('layouts.master')
@section ('title','Gasket and Seal Products')
@section('content')

<!-- /page_banner start-->
<div class="carousel-item active" style="background-image: url({{load_asset('images/sealing-bg.jpg')}}); background-size:cover; height:250px; width:100%;">
  <div class="carousel-caption1">
    <h2>Gaskets and Seals</h2>    
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
          <p>As the <b>authorized partner</b> for <font color="red">James Walker</font> (www.jameswalker.biz), a world leader in high Performance Sealing Technologies. We are further enabled to deliver high quality sealing products to a host of satisfied clients in Nigeria.</p>
          <p>We therefore welcome inquiries for swift delivery of James Walker gaskets, o-rings, seals, insulating sets, expansion joints of various sizes, pressure ratings and materials.</p>
          <br>          
        </div>
      </div>
      {{-- <div class="col-lg-3" style="text-align: center">  
        <img class="img-fluid" src="{{load_asset('images/shop/gasket-1.png')}}" alt="Gasket 1 image">
      </div>
      <div class="col-lg-3" style="text-align: center">  
        <img class="img-fluid" src="{{load_asset('images/shop/gasket-2.png')}}" alt="Gasket 2 image">
      </div>
      <div class="col-lg-3" style="text-align: center">  
        <img class="img-fluid" src="{{load_asset('images/shop/gasket-3.png')}}" alt="Gasket 3 image">
      </div>
      <div class="col-lg-3" style="text-align: center">  
        <img class="img-fluid" src="{{load_asset('images/shop/gasket-4.png')}}" alt="Gasket 4 image">
      </div> --}}
    </div>
  </div>
</section>
<!-- /about_con end--> 
<br><br><br><br><br><br><br><br>

@endsection
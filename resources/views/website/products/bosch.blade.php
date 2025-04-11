@extends('layouts.master')
@section ('title','Bosch Rexroth')
@section('content')

<!-- /page_banner start-->
<div class="carousel-item active" style="background-image: url({{load_asset('images/product/bosch-5.jpg')}}); background-size:cover; background-position:center; height:250px; width:100%;">
  <div class="carousel-caption1">
    <h2>Bosch Products</h2>    
  </div>
</div>
<!-- /page_banner end--> 

<!-- /about_con start-->
<section class="about_page">
  <div class="container">
    <div class="row">      
      <div class="col-lg-12 col-md-12">
        
        <div class="about_pages_con">

          <p>As a Bosch Rexroth distributor and local rep, we are well-positioned to provide access to high-quality and reliable hydraulic, pneumatic, and automation systems. </p>

        <p>Drawing on Bosch Rexroth’s extensive portfolio of fluid power and industrial automation technologies, We are further enabled to offer and deliver world-class engineering solutions that enhance the operational efficiency of our customers in safe and environmentally friendly manner.</p>

          <p>Our range of products and solutions include:</p>
          <ul style="list-style-type: none; padding-left: 20px; text-align:left">
            <li style="margin-bottom: 5px;"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Industrial and Mobile Hydraulics Systems</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Bosch Professional Power Tools</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Pneumatic Components and Solutions</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Electric Drives & Control
            </li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Assembly Technology</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Filtration Technology</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Hose Fittings</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Linear Technology</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Vacuum Technology</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Process Valves and Actuators</li>
          </ul>
          <br>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /about_con end--> 
<br><br><br>

@endsection
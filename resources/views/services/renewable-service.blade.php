@extends('layouts.master')
@section ('title','Renewable Energy')
@section('content')

<!-- /page_banner start-->
<div class="carousel-item active" style="background-image: url({{load_asset('images/renewable-bg.jpg')}}); background-size:cover; height:250px; width:100%;">
  <div class="carousel-caption1">
    <h2>Renewable Energy</h2>    
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
          <p>At TAG Energy, we are committed to advancing renewable energy solutions, specializing in solar and wind energy technologies. As a leader in the field, we provide cutting-edge solutions designed to harness the power of the sun and wind efficiently and sustainably.</p>
          <p>Our renewable energy offerings are engineered to meet the highest industry standards, ensuring reliable and efficient performance. We focus on delivering innovative products and services that address the specific needs of our clients and contribute to a cleaner and more sustainable future.</p>
          <p>Our solar and wind energy solutions include:</p>
          <ul style="list-style-type: none; padding-left: 0px">
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;High-efficiency Solar Panels</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Advanced Wind Turbines</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Inverters and Battery Storage Systems</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Solar Mounting Systems</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Wind Turbine Accessories</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Energy Management Solutions</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Consultation and Installation Services</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Maintenance and Support Services</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /about_con end--> 
<br><br><br><br><br>

@endsection
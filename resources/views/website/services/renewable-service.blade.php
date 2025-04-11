@extends('layouts.master')
@section ('title','Renewable Energy')
@section('content')

<style>

    .renewable-bg {
        background-position: center;
    }

    @media (max-width: 568px) {
        .renewable-bg {
            background-position: right;
        }
    }
    
</style>
<!-- /page_banner start-->
<div class="carousel-item active renewable-bg" style="background-image: url({{load_asset('images/renewable-bg.jpg')}}); background-size:cover; height:250px; width:100%;">
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
          <p>At TAG Energy, we specialize in providing innovative renewable energy solutions that harness the power of the sun to deliver reliable and sustainable energy. Our comprehensive systems are designed to meet the diverse needs of residential, commercial, and industrial clients, ensuring efficient energy production and storage.</p>
          <p>Our solar energy solutions are built to the highest industry standards and include:</p>
          <ul style="list-style-type: none; padding-left: 0px">
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;High-efficiency Solar Panel Arrays</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Advanced Inverter Systems for optimal energy conversion</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Centralized Power Management Solutions</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Energy Storage Systems for reliable, long-term power availability</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Solar Mounting Systems tailored for a variety of installations</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Comprehensive Consultation, Installation, and Maintenance Services</li>
          </ul>
          <p>We are dedicated to providing customized, scalable solutions that help our clients transition to renewable energy, reduce their carbon footprint, and ensure energy independence for the future.</p>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- /about_con end--> 
<br><br><br><br><br>

@endsection
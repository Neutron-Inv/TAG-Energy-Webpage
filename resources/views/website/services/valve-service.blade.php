@extends('layouts.master')
@section ('title','Valve Maintenance Service')
@section('content')

<style>

    .valve-bg {
        background-position: top;
    }

    @media (max-width: 568px) {
        .valve-bg {
            background-position: right;
        }
    }
    
</style>

<!-- /page_banner start-->
<div class="carousel-item active valve-bg" style="background-image: url({{load_asset('images/valve-bg.jpg')}}); background-size:cover; height:250px; width:100%;">
  <div class="carousel-caption1">
    <h2>Valve Maintenance </h2>    
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
          <p>TAG Energy is dedicated to providing our customers with one-stop valve supply and repair services. Our trained team of competent and resourceful engineers can ably repair and maintain valves onsite, reducing the cost of off-site refurbishments. We provide not only periodical and preventive maintenance, but also effective project and maintenance management.</p>
          <p>Our wide range of valve supplies, repair, and maintenance services include:</p>
          <ul style="list-style-type: none; padding-left: 0px">
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Safety Valve Repair</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manual Valve Reconditioning</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Control Valve Repair</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IPV Ball, Butterfly and Check valves</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Strack Gate, Globe and Check valves</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phoenix Hazardous Chemical Valves</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /about_con end--> 
<br>

@endsection
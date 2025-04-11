@extends('layouts.master')
@section ('title','Local Content Policy')
@section('content')

<!-- /page_banner start-->
<div class="carousel-item active" style="background-image: url({{load_asset('images/local-policy-bg.jpg')}}); background-size:cover; height:250px; width:100%;">
  <div class="carousel-caption1">
    <h2>Local Content Policy</h2>    
  </div>
</div>
<!-- /page_banner end--> 

<!-- /about_con start-->
<section class="about_page">
  <div class="container">
    <div class="row">      
      <div class="col-lg-12 col-md-12">
        {{-- <div class="about_page_con">
          <h2>Policy Overview</h2>
          <div class="about_border"></div>
        </div> --}}
        <div class="about_pages_con">
          <p>TAG Energy is fully committed to adding value to the Nigerian Economy through the implementation of relevant provisions of Nigerian Oil and Gas Industry Content Development (NOGICD) Act, 2010.</p> 
          <p>TAG Energy shall positively impact on the capacities, skills and capabilities of Nigerians by:</p> 
          <ul style="list-style-type: none; padding-left: 0px">
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Preferential utilization of Nigerian human resources, goods, services and equipment without compromising quality, health, safety, security and environmental standards.</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Ensuring that preferential consideration is given to Nigerian companies and vendors for procurement, sub-contracts, supplies and services.</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Standards of safety and careo	Initiating actions that will grow percentage of Nigerian content in items/areas where local options are unavailable; and</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Providing opportunities for Human Capacity Development of Nigerians and ensuring that Nigerians are given preferential consideration during employment.</li>
          </ul>
          <p>Our goal is to ensure the overall delivery of any contract in a manner that accomplishes full implementation of the Nigerian Content Development (NCD) policy of the Federal Government of Nigeria.</p>
          <p>TAG Energy NCD Objectives is to continuously develop local resources in the delivery of highly skilled manpower resources, goods and services and utilize these resources for the improvement of the corporate performance and economic well-being of Nigeria.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /about_con end--> 
<br>

@endsection
@extends('layouts.master')
@section ('title','Procurement Services')
@section('content')

<!-- /page_banner start-->
<div class="carousel-item active" style="background-image: url({{load_asset('images/procure-bg.jpg')}}); background-size:cover; height:250px; width:100%;">
  <div class="carousel-caption1">
    <h2>Procurement Services</h2>    
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
          <p>TAG Energy offers end-to-end acquisition and procurement services to clients in both the upstream & downstream sectors. Our close relationships with leading manufacturers from around the world gives us access to a comprehensive range of innovative products and full after sales technical support. This enables us to meet our customers’ precise product requirements at highly competitive rates with minimum lead times.</p>
          <p>Our procurement services include:</p>
          <ul style="list-style-type: none; padding-left: 0px">
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Project Management</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logistics</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clearing</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Warehousing</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Packaging</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /about_con end--> 
<br>

@endsection
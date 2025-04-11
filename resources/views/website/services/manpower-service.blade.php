@extends('layouts.master')
@section ('title','Manpower Support Service')
@section('content')

<!-- /page_banner start-->
<div class="carousel-item active manpower-bg" style="background-image: url({{load_asset('images/local-policy-bg.png')}}); background-size:cover; height:250px; width:100%;">
  <div class="carousel-caption1">
    <h2>Manpower Support</h2>    
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
          <p>At TAG Energy we concentrate on bringing value-added services to our customers through the delivery of high quality products and services allowing them to focus on their core businesses. Our diligence and commitment to exceptional performance are the reasons why our clients come back to us.</p>
          <p>Our staffing division is dedicated to the provision of highly qualified, experienced and reliable contract and permanent placement staff. We deliver end-to-end Human Capital Management.</p>
          <p>We provide services to E & P clients leveraging our extensive database of highly qualified local and foreign manpower and consulting personnel for immediate deployment in support of technical, professional and administrative requirements in:</p>
          <ul style="list-style-type: none; padding-left: 0px">
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Exploration & Production</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Engineering</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Commissioning</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Accounting & Finance</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QA/QC & HSE</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Project Management Services</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /about_con end--> 
<br>


@endsection
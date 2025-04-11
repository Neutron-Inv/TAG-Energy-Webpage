@extends('layouts.master')
@section ('title','Inspection, Repair and Maintenance Service')
@section('content')

<!-- /page_banner start-->
<div class="carousel-item active" style="background-image: url({{load_asset('images/irm-bg2.jpg')}}); background-size:cover; height:250px; width:100%;">
  <div class="carousel-caption1">
    <h2>Inspection, Repair and Maintenance (IRM)</h2>    
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
          <p>TAG Energy range of Inspections, Repairs and Maintenance (IRM) services provide customers with accurate and detailed information required to effectively assess the condition of their sensitive engineering assets.</p>
          <p>Every new opportunity is a challenge and it is ensured that our customers are satisfied with each call-out for a repair operation. At TAG, we also tailor our repair and maintenance solutions according to our Customers requirement.</p>
          <p>Our Inspection, Repair and Maintenance service offerings include:</p>
          <ul style="list-style-type: none; padding-left: 0px">
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inspection & Testing</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welding & Repairs</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pipeline Inspection and repairs</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pipe cutting & fitting</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Torquing Services</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Protective Coating and Corrosion Control</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /about_con end--> 
<br>

@endsection
@extends('layouts.master')
@section ('title','About Us')
@section('content')

<!-- /page_banner start-->
<div class="carousel-item active" style="background-image: url({{load_asset('images/new-about-bg.jpg')}}); background-size:cover; height:250px; width:100%;">
  <div class="carousel-caption1">
    <h2 >About Us</h2>    
  </div>
</div>
<!-- /page_banner end--> 

<!-- /about_con start-->
<section class="about_page">
  <div class="container">
    <div class="row">
      {{-- <div class="col-lg-6 col-md-12">
        <div class="about_page_img"> <img class="img-fluid" src="{{load_asset('images/about-side-2.png')}}"> </div>
      </div> --}}
      <div class="col-lg-12 col-md-12">
        <div class="about_page_con">
          <h2>Who we are</h2>
          <div class="about_border"></div>
        </div>
        <div class="about_pages_con">
          {{-- <p>TAG Energy is an integrated service company offering a comprehensive range of oilfield products and support services in the Nigerian Oil and Gas Industry.</p>
          <p>Our increased competence enables us to deliver world class services in Inspection, Repair and Maintenance (IRM), Flange Management Services and Sealing Solutions. We are a fast growing organization with a young & dynamic leadership, efficient structures, processes, infrastructure and in-depth knowledge of the industry.</p>
          <p>Our diligence and commitment to exceptional performance are the reasons why our clients come back to us. We are committed to excellence and creating innovative and flexible solutions for you too. We employ an integrated approach to project management that imposes a strict regime of proven methodologies and cutting edge techniques on all our engagements.</p>
          <p><b>Vision</b><br>To become the leading and preferred service provider in the Nigerian oil & gas industry.</p>
          <p><b>Mission</b><br>To always exceed our customers& expectations for improved performance and efficiency.</p> --}}
          <p>TAG Energy is an integrated service company offering a comprehensive range of oilfield products and services in the Nigerian Oil and Gas Industry. We are a fast growing organization with dynamic leadership, efficient structures, processes and in-depth knowledge of the local oil and gas industry.</p>
          <p>Our commitment to a culture of excellence, driven by a core set of values makes us a rare business partner and ultimately sets us apart from others. </p>
          <p>Our values are captured in these tenets:</p>
          <ul style="list-style-type: none; padding-left: 0px">
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Safety</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Quality</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Teamwork</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Innovation</li>
            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;Environment</li>
          </ul>
          <div class="readmore"> <a href="{{route('get-contact')}}" class="about_btn">Contact Us</a> </div>
        </div>
      </div>
    </div>
  </div>
  
  <div style="padding:55% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/858952637?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="TAG Energy"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>

<div><p>CAT CAT CAT</p></div>
</section>
<!-- /about_con end--> 
<br>

<!-- /achievements start-->
<div class="achievements" id="counter">
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6 border_col">
        <div class="achievements_box"> <img class="img-fluid" src="{{load_asset('images/days.png')}}" alt="Days Worked">
          <div class="counter-value" data-count="1003">0</div>
          <p>Days Worked</p>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6 border_col">
        <div class="achievements_box"> <img class="img-fluid" src="{{load_asset('images/project.png')}}" alt="Project Finished">
          <div class="counter-value" data-count="220">0</div>
          <p>Project Delivered</p>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6 border_col">
        <div class="achievements_box"> <img class="img-fluid" src="{{load_asset('images/client.png')}}" alt="Coffee Cup">
          <div class="counter-value" data-count="20">0</div>
          <p>Partners</p>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6 border_col">
        <div class="achievements_box"> <img class="img-fluid" src="{{load_asset('images/standard-hover.png')}}" alt="Client Satisfied">
          <div class="counter-value" data-count="280">0</div>
          <p>Clients</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /achievements end--> 

@endsection
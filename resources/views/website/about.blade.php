@extends('layouts.master')
@section ('title','About Us')
@section('content')

<!-- /page_banner start-->
<div class="carousel-item active about-bg" style="background-image: url({{load_asset('images/about-us.JPG')}}); background-size:cover; height:250px; width:100%;">
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
        <div class="about_page_img"> <img class="img-fluid" src="{{load_asset('images/about-us.JPG')}}"> </div>
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
</section>
<!-- /about_con end--> 
<br/>

<style>
  /* Team section styles */
  .team_member {
    text-align: center;
    margin-bottom: 30px;
  }
  
  .team_img {
    position: relative;
    width: 150px;
    height: 150px;
    margin: 0 auto 15px;
    border: 2px solid #ddd; /* Border around the image */
    border-radius: 10px; /* Rounded corners */
    overflow: hidden; /* Ensures the image stays within the border */
  }
  
  .team_img img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the image covers the entire container without stretching */
    border-radius: 10px; /* Rounded corners for the image itself */
  }
  
  .team_info h6 {
    color: #000;
  }
  
  .team_info p {
    color: #666;
  }
  
  /* Add some responsiveness */
  @media (max-width: 768px) {
    .team_member {
      margin-bottom: 20px;
    }
    
    .team_img {
      width: 120px;
      height: 120px;
    }
    
  }
</style>

<div class="row mt-5">
  <div class="col-md-12">
    <h2 class="text-center">Our Team</h2>
    <br/>
  </div>

  <div class="col-6 col-sm-6 col-md-2">
    <div class="team_member">
      <div class="team_img">
        <img class="img-fluid" src="{{load_asset('images/team/yg.jpg')}}" alt="Yemi GBADAMOSI">
      </div>
      <div class="team_info">
        <h6>Yemi <b>GBADAMOSI</b></h6>
        <p>CEO</p>
      </div>
    </div>
  </div>

  <div class="col-6 col-sm-6 col-md-2">
    <div class="team_member">
      <div class="team_img">
        <img class="img-fluid" src="{{load_asset('images/team/ag.jpg')}}" alt="Team Member 2">
      </div>
      <div class="team_info">
        <h6>Anne <b>GBADAMOSI</b></h6>
        <p>Executive Director</p>
      </div>
    </div>
  </div>

  <div class="col-6 col-sm-6 col-md-2">
    <div class="team_member">
      <div class="team_img">
        <img class="img-fluid" src="{{load_asset('images/team/pa.jpg')}}" alt="Team Member 3">
      </div>
      <div class="team_info">
        <h6>Peluola <b>ADENIJI</b></h6>
        <p>Assistant General Manager</p>
      </div>
    </div>
  </div>

  <div class="col-6 col-sm-6 col-md-2">
    <div class="team_member">
      <div class="team_img">
        <img class="img-fluid" src="{{load_asset('images/team/me.jpg')}}" alt="Team Member 4">
      </div>
      <div class="team_info">
        <h6>Mary <b>ERENGWA</b></h6>
        <p>SCM Manager</p>
      </div>
    </div>
  </div>

  <div class="col-6 col-sm-6 col-md-2">
    <div class="team_member">
      <div class="team_img">
        <img class="img-fluid" src="{{load_asset('images/team/da.jpg')}}" alt="Team Member 5">
      </div>
      <div class="team_info">
        <h6>Deola <b>ADEBISI</b></h6>
        <p>Finance MANAGER</p>
      </div>
    </div>
  </div>

  <div class="col-6 col-sm-6 col-md-2">
    <div class="team_member">
      <div class="team_img">
        <img class="img-fluid" src="{{load_asset('images/team/ut.jpg')}}" alt="Team Member 6">
      </div>
      <div class="team_info">
        <h6>Ufot <b>THOMPSON</b></h6>
        <p>Valve Center Manager</p>
      </div>
    </div>
  </div>
</div>
<!-- end Team Section -->

<br/>

<!-- gallery -->
<!--<div class="row">-->
<!--      <div class="owl-carousel carouselslider owl-theme ss_carousel latest_news_slider bottom-navigation" id="slider1" data-options='{"itemsCustom": [[0, 1],[768, 2],[992, 3],[1230, 3]], "navigation": false}'>-->
        
<!--        <div class="item">-->
<!--          <div class="col-md-12">-->
<!--            <div class="news_box">-->
<!--              <div class="news_img"> <img class="img-fluid" src="{{load_asset('images/about/1.jpg')}}" alt="service-3">-->
<!--                <div class="news_date">-->
<!--                  <div class="blog_date_img">-->
<!--                    <div class="blog_date_1"></div>-->
<!--                    <div class="blog_date_2"></div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div> -->
        
<!--                <div class="item">-->
<!--          <div class="col-md-12">-->
<!--            <div class="news_box">-->
<!--              <div class="news_img"> <img class="img-fluid" src="{{load_asset('images/about/2.jpg')}}" alt="service-3">-->
<!--                <div class="news_date">-->
<!--                  <div class="blog_date_img">-->
<!--                    <div class="blog_date_1"></div>-->
<!--                    <div class="blog_date_2"></div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div> -->
        
<!--                <div class="item">-->
<!--          <div class="col-md-12">-->
<!--            <div class="news_box">-->
<!--              <div class="news_img"> <img class="img-fluid" src="{{load_asset('images/about/3.jpg')}}" alt="service-3">-->
<!--                <div class="news_date">-->
<!--                  <div class="blog_date_img">-->
<!--                    <div class="blog_date_1"></div>-->
<!--                    <div class="blog_date_2"></div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div> -->
        
<!--                <div class="item">-->
<!--          <div class="col-md-12">-->
<!--            <div class="news_box">-->
<!--              <div class="news_img"> <img class="img-fluid" src="{{load_asset('images/about/4.jpg')}}" alt="service-3">-->
<!--                <div class="news_date">-->
<!--                  <div class="blog_date_img">-->
<!--                    <div class="blog_date_1"></div>-->
<!--                    <div class="blog_date_2"></div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div> -->
        
<!--                <div class="item">-->
<!--          <div class="col-md-12">-->
<!--            <div class="news_box">-->
<!--              <div class="news_img"> <img class="img-fluid" src="{{load_asset('images/about/5.jpg')}}" alt="service-3">-->
<!--                <div class="news_date">-->
<!--                  <div class="blog_date_img">-->
<!--                    <div class="blog_date_1"></div>-->
<!--                    <div class="blog_date_2"></div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div> -->
        
<!--                <div class="item">-->
<!--          <div class="col-md-12">-->
<!--            <div class="news_box">-->
<!--              <div class="news_img"> <img class="img-fluid" src="{{load_asset('images/about/6.jpg')}}" alt="service-3">-->
<!--                <div class="news_date">-->
<!--                  <div class="blog_date_img">-->
<!--                    <div class="blog_date_1"></div>-->
<!--                    <div class="blog_date_2"></div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div> -->
        
<!--                <div class="item">-->
<!--          <div class="col-md-12">-->
<!--            <div class="news_box">-->
<!--              <div class="news_img"> <img class="img-fluid" src="{{load_asset('images/about/7.jpg')}}" alt="service-3">-->
<!--                <div class="news_date">-->
<!--                  <div class="blog_date_img">-->
<!--                    <div class="blog_date_1"></div>-->
<!--                    <div class="blog_date_2"></div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div> -->
        
        
<!--      </div>-->
<!--    </div>-->
<!-- end Gallery -->
<br/>
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
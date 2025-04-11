@extends('layouts.master')
@section ('title','Work With Us')
@section('content')

<!-- /page_banner start-->
<div class="carousel-item active jobs-bg" style="background-image: url({{load_asset('images/work-with-us-7.jpg')}}); height:250px; width:100%;">
  <div class="carousel-caption1">
    <h2 style="color: #000;">Work with Us</h2>
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
          <p>At TAG Energy, we are committed to equality in employment giving everyone an opportunity to showcase their skills in pursuit of personal growth and career fulfillment. </p>
          <p>If this seems like a team you would want to join, take that bold step and apply for one of the current openings below.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /about_con end--> 

<div class="blog_pages" style="padding-top: 50px">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12">
        <div class="row">
          @foreach($jobs as $item)
          <div class="col-md-3">
            <div class="news_box blog_page w-100">
              {{-- <div class="news_img"> 
                <img class="img-fluid" src="{{load_asset('images/vacancy.jpg')}}" alt="Ad Image" />
                <div class="news_date">
                  <div class="date_box" style="background: #a1c436">
                    <h2><span class="large">{{date('d', strtotime($item->end_date))}}</span> <br>
                      {{date('M', strtotime($item->end_date))}} <br></h2>
                  </div>
                </div>
              </div> --}}
              <div class="news_detail" style="max-height: 200px; min-height: 200px">
                @if(strlen (trim($item->ad_title)) > 40)
                  <h3>{!! substr(trim($item->ad_title), 0, 40) !!}...</h3><br><br><br>
                @else
                  <h3>{!! substr(trim($item->ad_title), 0, 40)!!}</h3><br><br><br>
                @endif
                {{-- <h3>{{$item->ad_title}}</h3><br><br> --}}
                {{-- <p>{!! substr((htmlspecialchars_decode($item->job_description)), 0,74) !!}... </p> --}}
                {{-- <p>Job Category: {{$item->job_cat}} <br> Job Type: {{$item->job_type}}</p> --}}
                <a href="https://enabledjobs.com/job_view.php?jid={{$item->id}}" target="_blank" style="color: #fc786a;">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a><br><br>
                <a href="whatsapp://send?text={{$item->ad_title}}%20-%20https://enabledjobs.com/job_view.php?jid={{$item->id}}" data-action="share/whatsapp/share" style="color: #4AC959"><i class="fa fa-whatsapp" style="color: #4AC959"></i> Share via Whatsapp</a>                
              </div>
            </div>
          </div>
          @endforeach
        </div>  
      </div>         
      {{-- {{ $scholarships->links() }} --}}
    </div>
  </div>
</div>

{{-- <section id="new-project" class="new-project">
  <div class="container">
    <div class="new-project-details">
      <div class="row">
        <div class="offset-lg-1 col-lg-8 col-md-12">
          <div class="single-new-project">
            <h3>Powered By enabledjobs!</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-12">
          <div class="single-new-project">            
            <a href="https://enabledjobs.com/current-openings.php" class="slide-btn" target="_blank"> View more jobs! </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}

@endsection
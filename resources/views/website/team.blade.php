@extends('layouts.master')
@section ('title','Our Team')
@section('content')

<!-- /page_banner start-->
<div class="carousel-item active" style="background-image: url({{load_asset('images/team-bg.jpg')}}); background-size:cover; height:250px; width:100%;">
  <div class="carousel-caption1">
    <h2>Management Team</h2>    
  </div>
</div>
<!-- /page_banner end--> 


<!-- /team_con start-->
<section class="team" id="team">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-8 team_col">
        <div class="single-team-box team_page" style="background: url({{load_asset('images/team/yg.jpg')}}) no-repeat; background-position: center">
          <div class="team-box-inner">
            <h3>Yemi Gbadamosi</h3>
            <p class="team-meta">CEO</p>
            <ul class="social_icon">
              {{-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li> --}}
              <li><a href="https://www.linkedin.com/in/yemigbadamosi/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-8 team_col">
        <div class="single-team-box team_page" style="background: url({{load_asset('images/team/ag.jpg')}}) no-repeat; background-position: center">
          <div class="team-box-inner">
            <h3>Anne Gbadamosi</h3>
            <p class="team-meta">Managing Director</p>
            <ul class="social_icon">
              <li><a href="https://www.linkedin.com/in/anne-gbadamosi-77a163a/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-8 team_col">
        <div class="single-team-box team_page" style="background: url({{load_asset('images/team/peluola.jpg')}}) no-repeat; background-position: center">
          <div class="team-box-inner">
            <h3>Peluola Adeniji</h3>
            <p class="team-meta"> HR Lead </p>
            <ul class="social_icon">
              <li><a href="https://www.linkedin.com/in/awobajo-peluola-b48987104/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-8 team_col">
        <div class="single-team-box team_page" style="background: url({{load_asset('images/team/mary.jpg')}}) no-repeat; background-position: center">
          <div class="team-box-inner">
            <h3>Mary Nwaogwugwu</h3>
            <p class="team-meta"> Procurement & Supply Chain Lead </p>
            <ul class="social_icon">
              <li><a href="https://www.linkedin.com/in/mary-nwaogwugwu-396ab3b6/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>  
      <div class="col-lg-4 col-md-8 team_col">
        <div class="single-team-box team_page" style="background: url({{load_asset('images/team/karimot.jpg')}}) no-repeat; background-position: center">
          <div class="team-box-inner">
            <h3>Karimot Oseni</h3>
            <p class="team-meta">Account Lead </p>
            <ul class="social_icon">
              <li><a href="https://www.linkedin.com/in/oseni-karimot-damilola-63900ab9/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>  
      <div class="col-lg-4 col-md-8 team_col">
        <div class="single-team-box team_page" style="background: url({{load_asset('images/team/azeez.jpg')}}) no-repeat; background-position: center">
          <div class="team-box-inner">
            <h3>Azeez Adigun</h3>
            <p class="team-meta">IT Lead </p>
            <ul class="social_icon">
              <li><a href="https://linkedin.com/in/azeezadigun" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>          
    </div>
  </div>
</section>
<!-- /team_con end--> 




@endsection
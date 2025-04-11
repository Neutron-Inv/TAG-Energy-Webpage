@extends('layouts.master')
@section ('title','Our Products')
@section('content')

<!-- /page_banner start-->
<div class="carousel-item active" style="background-image: url({{load_asset('images/product-bg.jpg')}}); background-size:cover; height:250px; width:100%;">
  <div class="carousel-caption1">
    <h2>Products</h2>    
  </div>
</div>
<!-- /page_banner end--> 

<div class="blog_pages" style="padding-top: 50px">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12">
        <div class="row">   

          <div class="col-md-4">
            <div class="news_box blog_page">
              <div class="news_img"> 
                <img class="img-fluid" src="{{load_asset('images/shop/seal-1.jpg')}}" alt="Sealing image" />
              </div>
              <div class="news_detail">
                <h3>Sealing Technologies</h3>
                <p>Our solutions meet stringent industry standards, enhance safety while improving on operational efficiencies.</p>
                <a href="{{route('get-sealing-service')}}" style="color: #fc786a">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
              </div>
            </div>
          </div> 

          <div class="col-md-4">
            <div class="news_box blog_page">
              <div class="news_img"> 
                <img class="img-fluid" src="{{load_asset('images/shop/flow-2.png')}}" alt="Flow control image" />
              </div>
              <div class="news_detail">
                <h3>Flow Control Products</h3>
                <p>TAG Energy Flow Control offers you an unprecedented product assortment and turnkey solutions.</p>                
                <a href="{{route('get-flow-control-products')}}" style="color: #fc786a">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>    
              </div>
            </div>
          </div>             

          <div class="col-md-4">
            <div class="news_box blog_page">
              <div class="news_img"> 
                <img class="img-fluid" src="{{load_asset('images/shop/flange-5.png')}}" alt="Flange image" />                
              </div>
              <div class="news_detail">
                <h3>Flange Products</h3>
                <p>TAG supplies a variety of flange types including standard and special that ranges in nominal sizes from 1/2” up to 200”.</p>
                <a href="{{route('get-flange-products')}}" style="color: #fc786a">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a> 
              </div>
            </div>
          </div>            

          <div class="col-md-4">
            <div class="news_box blog_page">
              <div class="news_img"> 
                <img class="img-fluid" src="{{load_asset('images/shop/pipe-1.png')}}" alt="pipe image" />                
              </div>
              <div class="news_detail">
                <h3>Pipes and Pipe Fittings</h3>
                <p>TAG Energy is focused on the supply and delivery of pipes and fittings used in the upstream oil and gas industry.</p>
                <a href="{{route('get-pipe-products')}}" style="color: #fc786a">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
              </div>
            </div>
          </div> 

          <div class="col-md-4">
            <div class="news_box blog_page">
              <div class="news_img"> 
                <img class="img-fluid" src="{{load_asset('images/shop/insulating.png')}}" alt="insulation image" />
              </div>
              <div class="news_detail">
                <h3>Insulation Products</h3>
                <p>TAG Energy has partnered with ROCKWOOL Technical Insulation, a division of ROCKWOOL Group and the world’s largest stone wool... {{--manufacturer to distribute and install durable and sustainable stone wool insulation products in the Nigerian market…--}}</p>                  
                <a href="{{route('get-insulation-products')}}" style="color: #fc786a">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>  

        </div>  
      </div>     
    </div>
  </div>
</div>
<br><br><br><br><br><br><br>

<!-- /achievements start-->
<div class="achievements2" id="counter">
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6 border_col">
        <div class="achievements_box"> <img class="img-fluid" src="{{load_asset('images/basic-hover.png')}}" alt="quality delivery">
          {{-- <div class="counter-value" data-count="785">0</div> --}}
          <div class="counter-value">100%</div>
          <p>Quality Delivery</p>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6 border_col">
        <div class="achievements_box"> <img class="img-fluid" src="{{load_asset('images/unlimited-hover.png')}}" alt="Ontime delivery">
          <div class="counter-value">100%</div>
          <p>On-time Delivery</p>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6 border_col">
        <div class="achievements_box"> <img class="img-fluid" src="{{load_asset('images/project.png')}}" alt="real time status">
          <div class="counter-value">100%</div>
          <p>Real time Status</p>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6 border_col">
        <div class="achievements_box"> <img class="img-fluid" src="{{load_asset('images/days.png')}}" alt="Client Satisfied">
          <div class="counter-value">100%</div>
          <p>Satisfied Customer</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /achievements end--> 

@endsection
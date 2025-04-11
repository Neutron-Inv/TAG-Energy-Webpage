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

<div class="blog_pages">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="single-blog-post">
          <div class="content-box">                      
            <div class="content_blog">
              <div class="row">
                <div class="col-lg-8">  
                  <h3>Flow Control Products</h3>
                  <p>TAG Energy Flow Control offers you an unprecedented assortment and turnkey solutions. Benefit from our in-depth application knowledge, gained over the years in the business, and reduce costs throughout your supply chain.</p>
                  <p>TAG Flow Control has a well-established project management organization which can fully support the total complexity of a large industrial project, in all the different stages of the process such as specialized document handling systems, co-engineering, FAT etc.</p>
                  {{-- <div class="readmore"> <a href="{{ route('get-flow-control-products') }}" class="about_btn">View Products</a> </div> --}}
                </div>
                <div class="col-lg-4">  
                  <img class="img-fluid" src="{{load_asset('images/shop/flow-2.png')}}" alt="Flow control image">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="single-blog-post">
          {{-- <div class="img-box"> <img class="img-fluid" src="assets/images/3.jpg" alt=""> </div> --}}
          <div class="content-box">            
            <div class="content_blog">
              <div class="row">
                <div class="col-lg-8"> 
                  <h3>Flange Products</h3>
                  <p>We offer a variety of flange types that ranges in nominal sizes from 1/2” up to 200” and weight classes that ranges from 150# (lbs.) to 2,500# (lbs.) </p>
                  <p>We specialize in:</p>
                  <ul style="list-style-type: none; padding-left: 0px; color: #9c9c9c">
                    <li style="margin-bottom: 5px;"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Orifice flanges with plates if needed</li>
                    <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RTJ (Ring Type Joint) facing</li>
                    <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reducing flanges with hubs</li>
                    <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;API, MSS, AWWA</li>
                    <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Spectacle blinds</li>
                    <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Long weld neck flanges</li>
                    <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Metric flanges and spacers</li>
                    <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Large OD (Outside Diameter) flanges</li>
                    <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Standard slip-on, blind, weld neck, Socket weld, threaded, and lap joint flanges</li>
                  </ul>
                  {{-- <div class="readmore"> <a href="{{ route('get-flange-products') }}" class="about_btn">View Flanges</a> </div> --}}
                </div>
                <div class="col-lg-4">  
                  <img class="img-fluid" src="{{load_asset('images/shop/flange-5.png')}}" alt="Flow control image">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="single-blog-post">
          {{-- <div class="img-box"> <img class="img-fluid" src="assets/images/3.jpg" alt=""> </div> --}}
          <div class="content-box">            
            <div class="content_blog">
              <div class="row">
                <div class="col-lg-8"> 
                  <h3>Gaskets and Seals</h3>
                  <p>As the <b>authorized partner</b> for <font color="red">James Walker</font> (www.jameswalker.biz), a world leader in high Performance Sealing Technologies. We are further enabled to deliver high quality sealing products to a host of satisfied clients in Nigeria.</p>
                  <p>We therefore welcome inquiries for swift delivery of James Walker gaskets, o-rings, seals, insulating sets, expansion joints of various sizes, pressure ratings and materials.</p>
                  {{-- <div class="readmore"> <a href="{{ route('get-gasket-products') }}" class="about_btn">View Gaskets</a> </div> --}}
                </div>
                <div class="col-lg-4">  
                  <img class="img-fluid" src="{{load_asset('images/shop/gasket-4.png')}}" alt="Flow control image">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="single-blog-post">
          {{-- <div class="img-box"> <img class="img-fluid" src="assets/images/3.jpg" alt=""> </div> --}}
          <div class="content-box">            
            <div class="content_blog">
              <div class="row">
                <div class="col-lg-8">
                  <h3>Pipes and Pipe Fittings</h3>
                  <p>We supply and deliver a wide range of seamless steel pipes, butt weld pipe fittings, elbow, reducer, flange, Tee and
                    steel fittings.</p>
                  <p>We also offer a complete line of pipe hangers, pipe supports and related items for all your applications.</p>
                  {{-- <div class="readmore"> <a href="{{ route('get-pipe-products') }}" class="about_btn">View Pipes</a> </div> --}}
                </div>
                <div class="col-lg-4">  
                  <img class="img-fluid" src="{{load_asset('images/shop/pipe-1.png')}}" alt="pipe image">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="single-blog-post">
          {{-- <div class="img-box"> <img class="img-fluid" src="assets/images/3.jpg" alt=""> </div> --}}
          <div class="content-box">            
            <div class="content_blog">
              <div class="row">
                <div class="col-lg-8">
                  <h3>Insulation Products</h3>
                  <p>We supply and deliver a wide range of smart and sustainable stone wool insulation products for the construction industry. Our insulation products are based on innovative stone wool technology.</p>
                  <p>We specialize in:</p>
                  <ul style="list-style-type: none; padding-left: 0px; color: #9c9c9c">
                    <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Attic Insulation</li>
                    <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OEM Insulation</li>
                    <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flat Roof Insulation</li>
                    <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Exterior Walls Insulation</li>
                    <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Floor Insulation</li>
                    <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ceiling Insulation</li>
                    <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interior wall Insulation</li>
                  </ul>
                  {{-- <div class="readmore"> <a href="{{ route('get-pipe-products') }}" class="about_btn">View Pipes</a> </div> --}}
                </div>
                <div class="col-lg-4">  
                  <img class="img-fluid" src="{{load_asset('images/shop/insulating.png')}}" alt="insulation image">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="news_box blog_page">
            <div class="news_img"> 
              <img class="img-fluid" src="{{load_asset('images/shop/insulating.png')}}" alt="insulation image" />
              {{-- <div class="news_date">
                <div class="date_box" style="background: #a1c436">
                  <h2><span class="large">{{date('d', strtotime($item->end_date))}}</span> <br>
                    {{date('M', strtotime($item->end_date))}} <br></h2>
                </div>
              </div> --}}
            </div>
            <div class="news_detail">
              <h3>Insulation Products</h3>
              <p>We supply and deliver a wide range of smart and sustainable stone wool insulation products for the construction industry. </p>                  
              <a href="#" style="color: #fc786a" data-toggle="modal" data-target="#insulationModal">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a> 
              <!--Modal: modalYT-->
              <div class="modal fade" id="insulationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <!--Content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel" style="padding-left: 20px; text-align: left; padding-top: 20px">Insulation Products</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        {{-- <span aria-hidden="true">&times;</span> --}}
                      </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body mb-0 p-0">
                      <p style="padding-left: 20px; text-align: left">We supply and deliver a wide range of smart and sustainable stone wool insulation products for the construction industry. Our insulation products are based on innovative stone wool technology.</p>
                      <p style="padding-left: 20px; text-align: left">We specialize in:</p>
                      <ul style="list-style-type: none; padding-left: 20px; text-align: left">
                        <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Attic Insulation</li>
                        <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OEM Insulation</li>
                        <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flat Roof Insulation</li>
                        <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Exterior Walls Insulation</li>
                        <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Floor Insulation</li>
                        <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ceiling Insulation</li>
                        <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interior wall Insulation</li>
                      </ul>
                    </div>

                    <!--Footer-->
                    <div class="modal-footer justify-content-center flex-column flex-md-row">                        
                      <button type="button" class="btn btn-outline-info btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                  <!--/.Content-->

                </div>
              </div>
              <!--Modal: modalYT-->

            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>
</div>



<!-- /achievements start-->
<div class="achievements2" id="counter">
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6 border_col">
        <div class="achievements_box"> <img class="img-fluid" src="{{load_asset('images/days.png')}}" alt="Days Worked">
          <div class="counter-value" data-count="785">0</div>
          <p>Purchase Orders</p>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6 border_col">
        <div class="achievements_box"> <img class="img-fluid" src="{{load_asset('images/project.png')}}" alt="Project Finished">
          <div class="counter-value" data-count="712">0</div>
          <p>On-time Delivery</p>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6 border_col">
        <div class="achievements_box"> <img class="img-fluid" src="{{load_asset('images/unlimited-hover.png')}}" alt="Coffee Cup">
          <div class="counter-value" data-count="608">0</div>
          <p>Satisfied Delivery</p>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6 border_col">
        <div class="achievements_box"> <img class="img-fluid" src="{{load_asset('images/basic-hover.png')}}" alt="Client Satisfied">
          <div class="counter-value">100%</div>
          <p>Communication</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /achievements end--> 


@endsection
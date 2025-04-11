<div id="home">
  <div id="nav" class="carousel slide" data-ride="carousel">


    {{--<ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>--}}
    {{--@if ($carousels->count())--}}
    <div class="carousel-inner">
      {{--@foreach($carousels as $carousel)
        @if($loop->first)--}}


        <div class="carousel-item active" style="background-image: url(images/slider/slide5.jpg); background-size:cover; height:650px; width:100%;">
        <div class="carousel-overlay"></div>
          <div class="carousel-caption d-none d-md-block" style="text-shadow: 0px 0px 10px #000;">
            <h1 style="text-align: left">Valve <br>Maintenance</h1>
            {{-- <div class="slider_border"></div> --}}
            <p style="text-align: left">We are dedicated to providing our customers <br>with a one-stop shop for supply, repairs and maintenance of <br>all types of critical flow control products and actuators</p>
            <div class="slider_btn" style="float: left"> <a href="{{route('get-valve-service')}}" class="get_started">Learn More</a> <!--a href="#services" class="explore">Explore more</a--> </div>
          </div>
        </div>


        <div class="carousel-item" style="background-image: url(images/slider/slide3.jpg); background-size:cover; height:650px; width:100%;">
            <div class="carousel-overlay"></div>
          <div class="carousel-caption d-none d-md-block">
            <h1>Flange Management Services</h1>
            {{-- <div class="slider_border"></div> --}}
            <p>Our professional Flange Management Services and Joint Integrity Programs guarantees <br>100% leak free integration.</p>
            <div class="slider_btn"> <a href="{{route('get-flange-service')}}" class="get_started">Learn More</a> <!--a href="#services" class="explore">Explore more</a--> </div>
          </div>
        </div>

        

        <div class="carousel-item" style="background-image: url(images/slider/slide2.jpg); background-size:cover; height:650px; width:100%;">
            <div class="carousel-overlay"></div>
          <div class="carousel-caption d-none d-md-block">
            <h1 style="text-align: right">World-Class <br>Delivery</h1>
            {{-- <div class="slider_border"></div> --}}
            <p style="text-align: right">TAG Energy offer End-to-End Acquisition <br>and Procurement Services to clients in both <br>Upstream & Downstream Sectors.</p>
            <div class="slider_btn" style="float: right"> <a href="{{route('get-procurement-service')}}" class="get_started">Learn More</a> <!--a href="#services" class="explore">Explore more</a--> </div>
          </div>
        </div>
        
        <div class="carousel-item" style="background-image: url(images/slider/slide1.jpg); background-size:cover; height:650px; width:100%;">
            <div class="carousel-overlay"></div>
          <div class="carousel-caption d-none d-md-block">
            <h1>Local Content</h1>
            {{-- <div class="slider_border" style="float: left"></div> --}}
            <p>TAG Energy is a Local company with a Global outlook. We remain committed to the maximum deployment and continuous development of local resources in everything we do.</p>
            <div class="slider_btn"> <a href="{{route('get-local-policy')}}" class="get_started">Learn More</a> <!--a href="#services" class="explore">Explore more</a--> </div>
          </div>
        </div>
        
        <div class="carousel-item" style="background-image: url(images/slider/slide4.jpg); background-size:cover; height:650px; width:100%;">
            <div class="carousel-overlay"></div>
          <div class="carousel-caption d-none d-md-block">
            <h1 style="text-align: left">Leak Detection <br>and Repairs</h1>
            {{-- <div class="slider_border"></div> --}}
            <p style="text-align: left">TAG Energy deploys state of the art Leak Detection Technology <br>and a repair program designed specifically to locate, <br>quantify and eliminate chemical emissions.</p>
            <div class="slider_btn" style="float: left"> <a href="{{route('get-contact')}}" class="get_started">Contact Us</a> <!--a href="#services" class="explore">Explore more</a--> </div>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url(images/slider/enabled-covid4.jpg); background-size:cover; height:650px; width:100%;">
            <div class="carousel-overlay"></div>
          <div class="carousel-caption d-none d-md-block">
            <h1 style="text-align: right">Safety First</h1>
            <p style="text-align: right">Above all, we put the safety and<br> well being of our people first.</p>
          </div>
        </div>
        
        <div class="carousel-item" style="background-image: url(images/slider/enabled-renewable.jpg); background-size:cover; height:650px; width:100%;">
            <div class="carousel-overlay"></div>
          <div class="carousel-caption d-none d-md-block">
            <h1 style="text-align: right">Renewable Energy</h1>
            <p style="text-align: right">Harnessing the power of the sun and wind for a sustainable future</p>
            <div class="slider_btn" style="float: right"> <a href="{{route('get-renewable-service')}}" class="get_started">Learn More</a></div>
          </div>
        </div>

        <!--<div class="carousel-item" style="background-image: url(images/slider/enabled-covid.jpg); background-size:cover; height:650px; width:100%;">-->
        <!--  <div class="carousel-caption d-none d-md-block">-->
        <!--    {{-- <h1 style="text-align: right">Safety First</h1>-->
        <!--    <p style="text-align: right">Above all, we put the safety and<br> well being of our people first.</p> --}}-->
        <!--  </div>-->
        <!--</div>-->
        {{-- @endif
        @if($loop->remaining)
        <div class="carousel-item" style="background-image: url(assets/images/{{$carousel->image}}); background-size:cover; height:650px; width:100%;">
          <div class="carousel-caption d-none d-md-block">
            <h1>{{$carousel->major_header}}</h1>
            <div class="slider_border"></div>
            <p>We welcome all academic and scholarship enthusiast on board as we continue to proffer consultancy, advisory, and transcript processing services to our clients.</p>
            <div class="slider_btn"> <a href="#pricing" class="get_started">Get Started</a> <a href="#services" class="explore">Explore more</a> </div>
          </div>
        </div>
        @endif
      @endforeach--}}      
    </div>
    {{--@endif--}}
    <a class="carousel-control-prev" href="#nav" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#nav" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i> <span class="sr-only">Next</span> </a>
  </div>
</div>
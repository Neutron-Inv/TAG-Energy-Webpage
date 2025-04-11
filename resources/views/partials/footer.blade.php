<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-5">
        {{-- <div class="footer_logo">
          <h2><img src="{{load_asset('images/tag.png')}}" alt="Solace Runnels"></h2><br>
          <p>TAG Energy is an integrated service company offering a comprehensive range of oilfield products and support services in the Nigerian Oil and Gas Industry.</p>
        </div> --}}
        <div class="footer_title">
          <h2><img src="{{load_asset('images/logo/cropped-white.png')}}" alt="Solace Runnels"></h2><br>
        </div>
        <div class="add_box">
          <p>TAG Energy is an integrated service company offering a comprehensive range of oilfield products and support services in the Nigerian Oil and Gas Industry.</p>
        </div>
        
        {{-- <div class="footer_social">
          <ul class="footer_icon">
            <li><a href="{{$about->fbUrl ?? '/'}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="{{$about->twUrl ?? '/'}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="{{$about->google ?? '/'}}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="{{$about->linkedin ?? '/'}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div> --}}
      </div>

      <div class="col-lg-1"></div>

      <div class="col-lg-4 col-md-3">
        <div class="footer_title">
          <h1>Quick Links</h1>
        </div>
        <ul class="quick_links">
          <li><a href="{{route('get-irm-service')}}">Inspection, Repair and Maintenance</a></li>
          <li><a href="{{route('get-flange-service')}}">Flange Management Services</a></li>
          <li><a href="{{route('get-valve-service')}}">Valve Repairs</a></li>
          <li><a href="{{route('get-manpower-service')}}">Manpower Support</a></li>
          <li><a href="{{route('get-renewable-service')}}">Renewable Energy</a></li>
        </ul>
      </div>


      {{--@if ($about != NULL)--}}
      {{--<div class="col-lg-3 col-md-4">
        <div class="footer_title">
          <h1>Contact Us</h1>
        </div>
        <div class="add_box"> <i class="fa fa-map-marker" aria-hidden="true"></i>
          <p style="margin-block-end: -7px">53, Eleganza Gardens, Lekki, Lagos, Nigeria.</p>
        </div>
        <div class="add_box"> <i class="fa fa-phone" aria-hidden="true"></i>
          <p style="margin-block-end: -7px"><a href="tel: +2347087905939" style="color: #ffffff">+234 1 295 6845, +234 708 790 5939</a></p>
        </div>
        <div class="add_box"> <i class="fa fa-envelope" aria-hidden="true"></i>
          <p style="margin-block-end: -7px"><a href="mailto: contact@tagenergygroup.net" style="color: #ffffff; font-size: 12px">contact[at]tagenergygroup[dot]net</a></p>
        </div>
      </div>--}}


      <div class="col-lg-3 col-md-12">
        <div class="footer_title">
          <h1>Newsletter</h1>
        </div>
        <div class="news_letter">
          <p>Sign up today for career and job opportunities at TAG Energy.</p>          
          {{--@include('partials.alerts')--}}
          <form action="{{ route('newsletter.save') }}" class="form-subscribe" method="POST">
            {!! csrf_field() !!}
            <div class="input-group">
              <input type="email" class="form-control input-lg" name="email" placeholder="Email Address" required />
              <span class="input-group-btn">
              <button class="btn btn-success btn-lg" type="submit" style="background: #b8d411; border-color: #fff"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
              </span> 
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="footer_bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="copyright">
          <p>&copy; <?php echo date("Y"); ?> {{config('app.name')}}. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </div>
</div> 
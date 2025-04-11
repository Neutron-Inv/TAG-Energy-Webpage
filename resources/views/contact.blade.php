@extends('layouts.master')
@section ('title','Contact Us')
@section('content')

<!-- /page_banner start-->
<div class="carousel-item active" style="background-image: url({{load_asset('images/office-1.jpeg')}}); background-size:cover; height:250px; width:100%;">
  <div class="carousel-caption1">
    <h2>Contact Us</h2>    
  </div>
</div>
<!-- /page_banner end--> 

<section class="contact_page">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h2>Get In Touch</h2>
        <div class="contact_border"></div>
        <div class="get_title1">
         
          <div class="address_box">
            <div class="add_box"> <i class="fa fa-map-marker" aria-hidden="true"></i>
              <h4>Location:</h4>
              <p>53, Eleganza Gardens, <br>Lekki, Lagos, Nigeria.</p>
            </div>
          </div>
          {{-- <div class="call_box">
                    <div class="call_box"> <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h4>Send us your inquiries</h4>
                        <p><a href="mailto:contact@tagenergygroup.net">contact[at]tagenergygroup[dot]net</a></p>
                    </div>
                </div> --}}          
	<div class="call_box"> <i class="fa fa-phone" aria-hidden="true"></i>
            <h4>Call us</h4>
            <p><a href="#">+234 906 243 5416,<br> +234 708 790 5939</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="get_title">
          <h2>Send Us a Message</h2>
          <div class="contact_border"></div>
        </div>
        <div class="contact_page_from">        
          <form action="{{ route('feedback.save') }}" class="contact__form" method="POST">  
            {!! csrf_field() !!}
            <div class="row">       
              <div class="col-md-4">
                <input name="name" class="contact_form_detail" type="text" placeholder="Your Name" required />
              </div>
              <div class="col-md-4">
                <input name="email" class="contact_form_detail" type="email" placeholder="Your Email Address" required />
              </div>
              <div class="col-md-4">
                <input name="phone" class="contact_form_detail" type="text" placeholder="Your Phone Number" required />
              </div>
              <div class="col-md-12">
                <textarea name="message" class="contact_form_detail1" placeholder="Your Message" minlength="15" required></textarea>
              </div>
              <div class="col-md-12">
                <div class="submit_btn_box">
                  <input name="submit" class="submit_btn" type="submit" value="Send Message" />
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- <hr> --}}

@endsection
@extends('layouts.master')
@section('title', 'Contact Us')
@section('content')

    <style>
        .contact-bg {
            background-position: top;
        }

        @media (max-width: 568px) {
            .contact-bg {
                background-position: right;
            }
        }
    </style>

    <!-- /page_banner start-->
    <div class="carousel-item active contact-bg"
        style="background-image: url({{ load_asset('images/contact-us-4.jpg') }}); background-size:cover; height:300px; width:100%;">
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

                        {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard.</p> --}}

                        <div class="address_box">
                            <div class="add_box">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h4>United Kingdom:</h4>
                                <p style="margin-bottom: 0px;">TAG Energy Group <br>20 Wenlock Road, London, N1 7GU.</p>
                            </div>


                        </div>

                        {{-- <div class="call_box">
                    <div class="call_box"> <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h4>Send us your inquiries</h4>
                        <p><a href="mailto:contact@tagenergygroup.net">contact[at]tagenergygroup[dot]net</a></p>
                    </div>
                </div> --}}

                        <div class="call_box">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <!-- <h4>Call us</h4> -->
                            <p><a href="#">+44 7960 162028</a> ,
                                <a href="tel:+44 7947 674380">+44 7947 674380</a>
                            </p>
                        </div>

                    </div>

                    <div class="get_title1">

                        {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard.</p> --}}

                        <div class="address_box">
                            <div class="add_box">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h4>Nigeria:</h4>
                                <p style="margin-bottom: 0px;">53, Eleganza Gardens, <br>Lekki, Lagos, Nigeria.</p>
                            </div>
                        </div>

                        {{-- <div class="call_box">
                            <div class="call_box"> <i class="fa fa-envelope" aria-hidden="true"></i>
                                <h4>Send us your inquiries</h4>
                                <p><a href="mailto:contact@tagenergygroup.net">contact[at]tagenergygroup[dot]net</a></p>
                            </div>
                        </div> --}}

                        <div class="call_box">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <!-- <h4>Call us</h4> -->
                            <p><a href="tel:+234 906 243 5416">+234 906 243 5416, +234 708 790 5939</a></p>
                        </div>

                        <div class="address_box">
                            <div class="add_box">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h4><a href="https://www.prasinox.com" target="_blank" style="color:#343E43"> Prasinox
                                        Energia:</a></h4>
                                <p style="margin-bottom: 0px;">Launda, Angola.</p>
                            </div>
                        </div>

                        {{-- <div class="call_box">
                            <div class="call_box"> <i class="fa fa-envelope" aria-hidden="true"></i>
                                <h4>Send us your inquiries</h4>
                                <p><a href="mailto:contact@tagenergygroup.net">contact[at]tagenergygroup[dot]net</a></p>
                            </div>
                        </div> --}}

                        <div class="call_box">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <!-- <h4>Call us</h4> -->
                            <p><a href="tel:+244 976 208 8025">+244 976 208 8025</a></p>
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
                                    <input name="name" class="contact_form_detail" type="text" placeholder="Your Name"
                                        required />
                                </div>
                                <div class="col-md-4">
                                    <input name="email" class="contact_form_detail" type="email"
                                        placeholder="Your Email Address" required />
                                </div>
                                <div class="col-md-4">
                                    <input name="phone" class="contact_form_detail" type="text"
                                        placeholder="Your Phone Number" required />
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

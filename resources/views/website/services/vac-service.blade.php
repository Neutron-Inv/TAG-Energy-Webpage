@extends('layouts.master')
@section('title', 'Valve Assembly Center')
@section('content')

    <!-- /page_banner start-->
    <div class="carousel-item active vac-bg"
        style="background-image: url({{ load_asset('images/vac.jpg') }}); background-size:cover; background-position:center 10%; height:300px; width:100%;">
        <div
            style="position: absolute; top: 0; right: 0; bottom: 0; left: 0; background: linear-gradient(to right, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0) 100%);">
        </div>
        <div class="carousel-caption1">
            <h2>Valve Assembly Center</h2>
        </div>
    </div>
    <!-- /page_banner end-->

    <!-- /about_con start-->
    <section class="about_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="about_pages_con">
                        <p>Our Valve Assembly Center (VAC) is a state-of-the-art facility located in the Trans Amadi area of
                            Port Harcourt, equipped with modern equipment and staffed by highly trained professionals.</p>

                        <p>Our VAC facility is fully-kitted with DNV 2.7-1 and ISO 10855 Certified equipment, including a
                            mobile unit available for immediate deployment. We are equipped with high technical modern valve
                            testing and repair equipment to ensure the highest quality of service.</p>

                        <p>Our capabilities include:</p>
                        <ul style="list-style-type: none; padding-left: 0px">
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Main Valve Test Bench</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Valve Work Benches</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paint & Blasting Booth</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DNV Mobile Test Facility</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shut-off Valve testing unit</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lathe and milling machines</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welding equipment</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fork lift and cranes</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Grinding and lapping machines</li>
                        </ul>

                        <p>Our team comprises trained personnel with quality experience to provide technical support and
                            ensure the highest standards of valve assembly, repair, and maintenance services.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /about_con end-->

    <!-- Image Gallery Section -->
    <section class="gallery-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 p-2">
                    <div class="gallery-item">
                        <img src="{{ load_asset('images/vac-facility-1.jpg') }}" alt="VAC Facility 1" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 p-2">
                    <div class="gallery-item">
                        <img src="{{ load_asset('images/vac-facility-2.jpg') }}" alt="VAC Facility 2" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 p-2">
                    <div class="gallery-item">
                        <img src="{{ load_asset('images/vac-facility-3.jpg') }}" alt="VAC Facility 3" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>

@endsection

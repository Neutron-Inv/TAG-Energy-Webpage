@extends('layouts.master')
@section('title', 'DNV Container Service')
@section('content')

    <!-- /page_banner start-->
    <div class="carousel-item active dnv-bg"
        style="background-image: url({{ load_asset('images/dnv.jpg') }}); background-size:cover; background-position:center 25%; height:300px; width:100%;">
        <div
            style="position: absolute; top: 0; right: 0; bottom: 0; left: 0; background: linear-gradient(to right, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0) 100%);">
        </div>
        <div class="carousel-caption1">
            <h2>Offshore DNV Container Service</h2>
        </div>
    </div>
    <!-- /page_banner end-->

    <!-- /about_con start-->
    <section class="about_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="about_pages_con">
                        <p>Our DNV Container Service provides a comprehensive solution for PSV maintenance and valve
                            testing, featuring state-of-the-art equipment and certified facilities.</p>

                        <p>Our container units are designed for optimal performance and mobility, ensuring quick deployment
                            and efficient operations in various locations.</p>

                        <p>Key Features:</p>
                        <ul style="list-style-type: none; padding-left: 0px">
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ventil CT20-1 (20ft. and 10ft.) designed for PSV maintenance
                            </li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Test unit VC25CC with high pressure gas and liquid test
                                circuit</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Compressor room with installed electrical compressor and Jib
                                crane 500kg</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fully operational unit with office space</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quick mobilization and demobilization</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ventil CT10-SRV Test unit</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Team of Valves specialists available and mobile</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On site maintenance, repairs, calibration of all types of
                                valves</li>
                        </ul>

                        <p>Technical Specifications:</p>
                        <ul style="list-style-type: none; padding-left: 0px">
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LP air test system: 0-7 bar / 100 psi</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gas test system: 0 – 300 bar / 4.350psi</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Liquid test system: 0-300 bar / 4.350 psi (gas-over-liquid)
                            </li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jib crane 500kgs</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HVAC unit (air conditioning)</li>
                        </ul>

                        <p>Facility Features:</p>
                        <ul style="list-style-type: none; padding-left: 0px">
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Office desk / small workbench</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Large, heavy duty workbench with vice and storage shelf</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Large tools / components storage shelves</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Documentation cupboard</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tools / small part storage drawers</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nozzle remover / valve fixture / (dis)assembly block</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Complete set of accessories</li>
                        </ul>

                        <p>Our DNV Container Service is certified for offshore operations (DNV 2.7.1 / EN 12079) and offers
                            online calibration services for optimal performance and accuracy.</p>
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
                <div class="col-lg-4 col-md-4 col-sm-12 p-3">
                    <div class="gallery-item">
                        <img src="{{ load_asset('images/dnv.jpg') }}" alt="DNV Container 1" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 p-3">
                    <div class="gallery-item">
                        <img src="{{ load_asset('images/dnv-container-2.jpg') }}" alt="DNV Container 2" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 p-3">
                    <div class="gallery-item">
                        <img src="{{ load_asset('images/dnv-container-3.jpg') }}" alt="DNV Container 3" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>

@endsection

@extends('layouts.master')
@section('title', 'Quality Policy Statement')
@section('content')

    <!-- /page_banner start-->
    <div class="carousel-item active quality-bg"
        style="background-image: url({{ load_asset('images/quality-policy.jpg') }}); background-position:center 80%; background-size:cover; height:300px; width:100%;">
        <div
            style="position: absolute; top: 0; right: 0; bottom: 0; left: 0; background: linear-gradient(to right, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0) 100%);">
        </div>
        <div class="carousel-caption1">
            <h2 style="font-size: 1.8rem;">Quality Policy Statement</h2>
        </div>
    </div>
    <!-- /page_banner end-->

    <!-- /about_con start-->
    <section class="about_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="about_pages_con">
                        <p>TAG Energy Group, a leading integrated service company provides a comprehensive range of oilfield
                            products and services within the Nigerian Oil and Gas Industry.</p>

                        <p>Our core values of Safety, Quality, Teamwork, Innovation, and Sustainable Environmental
                            Management Practices define our business approach and distinguish us as a trusted industry
                            partner.</p>

                        <h3 style="font-size: 1.2rem;">Leadership Commitment</h3>
                        <p>TAG Energy Group's top management demonstrates leadership and commitment to the Quality
                            Management System (QMS) by:</p>
                        <ul style="list-style-type: none; padding-left: 0px">
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taking accountability for the effectiveness of the QMS.</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Establishing, implementing, and maintaining a Quality Policy
                                that aligns with our organizational purpose, context, and strategic direction.</li>
                            <li style="margin-bottom: 5px"><span class="fa fa-angle-right" style="color: #fc786a"></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Policy provides a framework for setting and achieving
                                quality objectives.</li>
                        </ul>

                        <h3 style="font-size: 1.2rem;">Regulatory Compliance</h3>
                        <p>We are fully committed to complying with all applicable legal, regulatory, and industry-specific
                            requirements governing our sector; thus, ensuring the highest standards in our operations and
                            service delivery.</p>

                        <h3 style="font-size: 1.2rem;">Environmental Responsibility</h3>
                        <p>TAG Energy Group is committed to reducing our carbon footprint by implementing sustainable
                            practices, promoting energy efficiency and reducing waste.</p>

                        <h3 style="font-size: 1.2rem;">Continuous Improvement</h3>
                        <p>To maintain relevance and effectiveness, this policy shall be reviewed annually and updated as
                            necessary.</p>

                        <h3 style="font-size: 1.2rem;">Communication and Awareness</h3>
                        <p>This policy shall be communicated to all employees and visitors in our offices, our website, and
                            other platforms to ensure awareness and accessibility for all stakeholders.</p>

                        {{-- <div class="signature-section" style="margin-top: 50px; text-align: center;">
                            <div class="signature-image">
                                <img src="{{ load_asset('images/signature.png') }}" alt="CEO Signature"
                                    style="height: 100px;">
                            </div>
                             <div class="signature-details">
                                <p
                                    style="margin-bottom: 2px; font-family: 'Vivaldi', cursive; font-size: 1.8rem; letter-spacing: 1px;">
                                    Yemi Gbadamosi</p>
                                <p style="margin-bottom: 2px;">CEO</p>
                                <p>March 21, 2025</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /about_con end-->

@endsection

@extends('layouts.master')
@section('title', 'Past Performance')
@section('content')

    <!-- /page_banner start-->
    <div class="carousel-item active performance-bg"
        style="background-image: url({{ load_asset('images/past-performance.jpg') }}); background-size:cover; background-position:center 30%; height:300px; width:100%; position: relative;">
        <div
            style="position: absolute; top: 0; right: 0; bottom: 0; left: 0; background: linear-gradient(to right, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0) 100%);">
        </div>
        <div class="carousel-caption1">
            <h2 style="font-size: 2rem;">Past Performance</h2>
        </div>
    </div>
    <!-- /page_banner end-->

    <!-- Projects Section -->
    <section class="projects-section" style="padding: 50px 0;">
        <div class="container">
            <div class="row">
                <!-- Project 1 -->
                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="project-card"
                        style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); height: 100%;">
                        <div class="project-image"
                            style="height: 250px; overflow: hidden; border-radius: 10px 10px 0 0; position: relative;">
                            <img src="{{ load_asset('images/projects/gangway-overhaul.jpg') }}"
                                alt="Gangway & Ancillary Support Overhaul"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="padding: 20px;">
                            <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 15px;">Overhaul of the Gangway &
                                Ancillary Support
                                Overhaul</h3>
                            <p style="color: #666; margin-bottom: 15px;">Comprehensive overhaul and refurbishment of the
                                gangway and ancillary support systems to enhance stability, safety & operational
                                efficiency.</p>
                            <div class="project-details"
                                style="border-top: 1px solid #eee; padding-top: 15px; position: relative;">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <p style="margin-bottom: 5px;"><strong>Client:</strong> Nigeria Liquefied Natural
                                            Gas
                                            Limited (NLNG)</p>
                                        <p style="margin-bottom: 5px;"><strong>Location:</strong> Bonny Island, Rivers State
                                        </p>
                                        <p style="margin-bottom: 5px;"><strong>Date:</strong> February 2024 – Present</p>
                                    </div>
                                    <div class="client-logo" style="margin-left: 20px;">
                                        <img src="{{ load_asset('images/clients/resized/6.jpg') }}" alt="NLNG Logo"
                                            style="max-height: 60px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="project-card"
                        style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); height: 100%;">
                        <div class="project-image"
                            style="height: 250px; overflow: hidden; border-radius: 10px 10px 0 0; position: relative;">
                            <img src="{{ load_asset('images/projects/pressure-valves.jpg') }}"
                                alt="Pressure Safety Valves Installation"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="padding: 20px;">
                            <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 15px;">Installation of 400 Pressure
                                safety Valves</h3>
                            <p style="color: #666; margin-bottom: 15px;">Installation of 400 pressure safety valves at Warri
                                Refinery, ensuring optimal safety and operational efficiency in critical processes.</p>
                            <div class="project-details"
                                style="border-top: 1px solid #eee; padding-top: 15px; position: relative;">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <p style="margin-bottom: 5px;"><strong>Client:</strong> Daewoo</p>
                                        <p style="margin-bottom: 5px;"><strong>Location:</strong> Delta State</p>
                                        <p style="margin-bottom: 5px;"><strong>Date:</strong> November 2023 – Present</p>
                                    </div>
                                    <div class="client-logo" style="margin-left: 20px;">
                                        <img src="{{ load_asset('images/clients/resized/13.jpg') }}" alt="Daewoo Logo"
                                            style="max-height: 60px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="project-card"
                        style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); height: 100%;">
                        <div class="project-image"
                            style="height: 250px; overflow: hidden; border-radius: 10px 10px 0 0; position: relative;">
                            <img src="{{ load_asset('images/projects/valves-refurbishment.jpg') }}"
                                alt="Pressure Safety Valves Refurbishment"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="padding: 20px;">
                            <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 15px;">Refurbishment and Repair of 488
                                Pressure safety Valves</h3>
                            <p style="color: #666; margin-bottom: 15px;">Refurbishment of 488 pressure safety valves at
                                Warri Refinery, restoring optimal performance and reliability in critical safety systems.
                            </p>
                            <div class="project-details"
                                style="border-top: 1px solid #eee; padding-top: 15px; position: relative;">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <p style="margin-bottom: 5px;"><strong>Client:</strong> Daewoo</p>
                                        <p style="margin-bottom: 5px;"><strong>Location:</strong> Delta State</p>
                                        <p style="margin-bottom: 5px;"><strong>Date:</strong> March 2023 – Present</p>
                                    </div>
                                    <div class="client-logo" style="margin-left: 20px;">
                                        <img src="{{ load_asset('images/clients/resized/13.jpg') }}" alt="Daewoo Logo"
                                            style="max-height: 60px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="project-card"
                        style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); height: 100%;">
                        <div class="project-image"
                            style="height: 250px; overflow: hidden; border-radius: 10px 10px 0 0; position: relative;">
                            <img src="{{ load_asset('images/projects/steam-valves.jpg') }}"
                                alt="Steam Line Safety Valves Service"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="padding: 20px;">
                            <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 15px;">Servicing and Caliberation of
                                Steam Line Safety Valves
                            </h3>
                            <p style="color: #666; margin-bottom: 15px;">Professional servicing and calibration of steam
                                line safety valves, ensuring precise operation and compliance with industry standards.</p>
                            <div class="project-details"
                                style="border-top: 1px solid #eee; padding-top: 15px; position: relative;">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <p style="margin-bottom: 5px;"><strong>Client:</strong> Drury Industries Limited</p>
                                        <p style="margin-bottom: 5px;"><strong>Location:</strong> Opic Industrial Estate,
                                            Ogun</p>
                                        <p style="margin-bottom: 5px;"><strong>Date:</strong> May 2021 - July 2021</p>
                                    </div>
                                    <div class="client-logo" style="margin-left: 20px;">
                                        <img src="{{ load_asset('images/clients/resized/21.jpg') }}" alt="Drury Logo"
                                            style="max-height: 60px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="project-card"
                        style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); height: 100%;">
                        <div class="project-image"
                            style="height: 250px; overflow: hidden; border-radius: 10px 10px 0 0; position: relative;">
                            <img src="{{ load_asset('images/projects/manpower-support.jpg') }}"
                                alt="Manpower Support Services" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="padding: 20px;">
                            <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 15px;">Provision of Manpower Support
                                Services</h3>
                            <p style="color: #666; margin-bottom: 15px;">Provision of comprehensive manpower support
                                services, delivering skilled professionals to meet operational requirements.</p>
                            <div class="project-details"
                                style="border-top: 1px solid #eee; padding-top: 15px; position: relative;">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <p style="margin-bottom: 5px;"><strong>Client:</strong> Chevron Nigeria Limited</p>
                                        <p style="margin-bottom: 5px;"><strong>Location:</strong> Victoria Island, Lagos
                                        </p>
                                        <p style="margin-bottom: 5px;"><strong>Date:</strong> June 2018 – July 2020</p>
                                    </div>
                                    <div class="client-logo" style="margin-left: 20px;">
                                        <img src="{{ load_asset('images/clients/resized/14.jpg') }}" alt="Chevron Logo"
                                            style="max-height: 60px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="project-card"
                        style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); height: 100%;">
                        <div class="project-image"
                            style="height: 250px; overflow: hidden; border-radius: 10px 10px 0 0; position: relative;">
                            <img src="{{ load_asset('images/projects/offshore-personnel.jpg') }}"
                                alt="Offshore Personnel Support" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="padding: 20px;">
                            <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 15px;">Provision of Offshore
                                Personnel Support Services for Akpo and Egina
                            </h3>
                            <p style="color: #666; margin-bottom: 15px;">Provision of specialized offshore personnel
                                support services for Akpo and Egina projects, ensuring operational excellence.</p>
                            <div class="project-details"
                                style="border-top: 1px solid #eee; padding-top: 15px; position: relative;">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <p style="margin-bottom: 5px;"><strong>Client:</strong> Total Energies Nigeria</p>
                                        <p style="margin-bottom: 5px;"><strong>Location:</strong> Victoria Island, Lagos
                                        </p>
                                        <p style="margin-bottom: 5px;"><strong>Date:</strong> January 2019 - December 2019
                                        </p>
                                    </div>
                                    <div class="client-logo" style="margin-left: 20px;">
                                        <img src="{{ load_asset('images/clients/resized/17.jpg') }}" alt="Total Logo"
                                            style="max-height: 60px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 7 -->
                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="project-card"
                        style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); height: 100%;">
                        <div class="project-image"
                            style="height: 250px; overflow: hidden; border-radius: 10px 10px 0 0; position: relative;">
                            <img src="{{ load_asset('images/projects/lifeboat-recertification.jpg') }}"
                                alt="Agbami Lifeboat Recertification"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="padding: 20px;">
                            <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 15px;">Provision and Delivery of
                                Agbami Lifeboat 5-Year Recertification Services
                            </h3>
                            <p style="color: #666; margin-bottom: 15px;">Comprehensive 5-year recertification services for
                                Agbami lifeboats, ensuring safety compliance and operational readiness.</p>
                            <div class="project-details"
                                style="border-top: 1px solid #eee; padding-top: 15px; position: relative;">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <p style="margin-bottom: 5px;"><strong>Client:</strong> Chevron Nigeria Limited</p>
                                        <p style="margin-bottom: 5px;"><strong>Location:</strong> Lekki, Lagos</p>
                                        <p style="margin-bottom: 5px;"><strong>Date:</strong> June 2018 – July 2020</p>
                                    </div>
                                    <div class="client-logo" style="margin-left: 20px;">
                                        <img src="{{ load_asset('images/clients/resized/14.jpg') }}" alt="Chevron Logo"
                                            style="max-height: 60px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 8 -->
                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="project-card"
                        style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); height: 100%;">
                        <div class="project-image"
                            style="height: 250px; overflow: hidden; border-radius: 10px 10px 0 0; position: relative;">
                            <img src="{{ load_asset('images/projects/buying-house.jpg') }}" alt="Buying House Agreement"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="padding: 20px;">
                            <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 15px;">Buying House Agreement (BHA)
                                Contract</h3>
                            <p style="color: #666; margin-bottom: 15px;">Strategic partnership for procurement and supply
                                chain management, ensuring efficient delivery of quality products and services.</p>
                            <div class="project-details"
                                style="border-top: 1px solid #eee; padding-top: 15px; position: relative;">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <p style="margin-bottom: 5px;"><strong>Client:</strong> Nigeria Liquefied Natural
                                            Gas
                                            Limited</p>
                                        <p style="margin-bottom: 5px;"><strong>Location:</strong> Bonny Island, Rivers
                                            State</p>
                                        <p style="margin-bottom: 5px;"><strong>Date:</strong> October 2024 - Present</p>
                                    </div>
                                    <div class="client-logo" style="margin-left: 20px;">
                                        <img src="{{ load_asset('images/clients/resized/6.jpg') }}" alt="NLNG Logo"
                                            style="max-height: 60px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 9 -->
                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="project-card"
                        style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); height: 100%;">
                        <div class="project-image"
                            style="height: 250px; overflow: hidden; border-radius: 10px 10px 0 0; position: relative;">
                            <img src="{{ load_asset('images/projects/actuators-rovs.jpg') }}"
                                alt="Actuators & Hydraulic ROVs Supply"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="padding: 20px;">
                            <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 15px;">Assurance and Spare Supply for
                                Doedijns Actuators & Hydraulic ROVs
                            </h3>
                            <p style="color: #666; margin-bottom: 15px;">Provision of Doedijns actuators and hydraulic
                                ROVs, ensuring reliable operation and maintenance of critical equipment.</p>
                            <div class="project-details"
                                style="border-top: 1px solid #eee; padding-top: 15px; position: relative;">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <p style="margin-bottom: 5px;"><strong>Client:</strong> Nigeria Liquefied Natural
                                            Gas
                                            Limited</p>
                                        <p style="margin-bottom: 5px;"><strong>Location:</strong> Bonny Island, Rivers
                                            State</p>
                                        <p style="margin-bottom: 5px;"><strong>Date:</strong> July 2024 – Present</p>
                                    </div>
                                    <div class="client-logo" style="margin-left: 20px;">
                                        <img src="{{ load_asset('images/clients/resized/6.jpg') }}" alt="NLNG Logo"
                                            style="max-height: 60px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 10 -->
                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="project-card"
                        style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); height: 100%;">
                        <div class="project-image"
                            style="height: 250px; overflow: hidden; border-radius: 10px 10px 0 0; position: relative;">
                            <img src="{{ load_asset('images/projects/gate-globe-valves.jpg') }}"
                                alt="Gate & Globe Valve Supply" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="padding: 20px;">
                            <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 15px;">Provision and Delivery of Gate
                                & Globe Valves</h3>
                            <p style="color: #666; margin-bottom: 15px;">Supply and delivery of high-quality gate and globe
                                valves, meeting stringent industry standards and specifications.</p>
                            <div class="project-details"
                                style="border-top: 1px solid #eee; padding-top: 15px; position: relative;">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <p style="margin-bottom: 5px;"><strong>Client:</strong> Nigeria Liquefied Natural
                                            Gas
                                            Limited</p>
                                        <p style="margin-bottom: 5px;"><strong>Location:</strong> Bonny Island, Rivers
                                            State</p>
                                        <p style="margin-bottom: 5px;"><strong>Date:</strong> February 2025</p>
                                    </div>
                                    <div class="client-logo" style="margin-left: 20px;">
                                        <img src="{{ load_asset('images/clients/resized/6.jpg') }}" alt="NLNG Logo"
                                            style="max-height: 60px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 11 -->
                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="project-card"
                        style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); height: 100%;">
                        <div class="project-image"
                            style="height: 250px; overflow: hidden; border-radius: 10px 10px 0 0; position: relative;">
                            <img src="{{ load_asset('images/projects/gaskets.jpg') }}" alt="Gaskets Supply"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="padding: 20px;">
                            <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 15px;">Provision and Delivery of
                                Gaskets</h3>
                            <p style="color: #666; margin-bottom: 15px;">Supply and delivery of high-performance gaskets,
                                ensuring reliable sealing solutions for critical applications.</p>
                            <div class="project-details"
                                style="border-top: 1px solid #eee; padding-top: 15px; position: relative;">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <p style="margin-bottom: 5px;"><strong>Client:</strong> Nigeria Liquefied Natural
                                            Gas
                                            Limited</p>
                                        <p style="margin-bottom: 5px;"><strong>Location:</strong> Bonny Island, Rivers
                                            State</p>
                                        <p style="margin-bottom: 5px;"><strong>Date:</strong> November 2024</p>
                                    </div>
                                    <div class="client-logo" style="margin-left: 20px;">
                                        <img src="{{ load_asset('images/clients/resized/6.jpg') }}" alt="NLNG Logo"
                                            style="max-height: 60px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 12 -->
                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="project-card"
                        style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); height: 100%;">
                        <div class="project-image"
                            style="height: 250px; overflow: hidden; border-radius: 10px 10px 0 0; position: relative;">
                            <img src="{{ load_asset('images/projects/acoustic-slabs.jpg') }}" alt="Acoustic Slab Supply"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="padding: 20px;">
                            <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 15px;">Provision and Delivery of
                                Acoustic Slab</h3>
                            <p style="color: #666; margin-bottom: 15px;">Supply and delivery of acoustic slabs, providing
                                effective noise control solutions for industrial applications.</p>
                            <div class="project-details"
                                style="border-top: 1px solid #eee; padding-top: 15px; position: relative;">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <p style="margin-bottom: 5px;"><strong>Client:</strong> Nigeria Liquefied Natural
                                            Gas
                                            Limited</p>
                                        <p style="margin-bottom: 5px;"><strong>Location:</strong> Bonny Island, Rivers
                                            State</p>
                                        <p style="margin-bottom: 5px;"><strong>Date:</strong> May 2024</p>
                                    </div>
                                    <div class="client-logo" style="margin-left: 20px;">
                                        <img src="{{ load_asset('images/clients/resized/6.jpg') }}" alt="NLNG Logo"
                                            style="max-height: 60px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 13 -->
                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="project-card"
                        style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); height: 100%;">
                        <div class="project-image"
                            style="height: 250px; overflow: hidden; border-radius: 10px 10px 0 0; position: relative;">
                            <img src="{{ load_asset('images/projects/valve-supply.jpg') }}" alt="Valves Supply"
                                style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="padding: 20px;">
                            <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 15px;">Provision and Delivery of
                                Valves</h3>
                            <p style="color: #666; margin-bottom: 15px;">Supply and delivery of high-quality valves,
                                meeting industry standards and specifications for optimal performance.</p>
                            <div class="project-details"
                                style="border-top: 1px solid #eee; padding-top: 15px; position: relative;">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <p style="margin-bottom: 5px;"><strong>Client:</strong> Daewoo Nigeria</p>
                                        <p style="margin-bottom: 5px;"><strong>Location:</strong> Warri, Delta State</p>
                                        <p style="margin-bottom: 5px;"><strong>Date:</strong> August 2023</p>
                                    </div>
                                    <div class="client-logo" style="margin-left: 20px;">
                                        <img src="{{ load_asset('images/clients/resized/13.jpg') }}" alt="Daewoo Logo"
                                            style="max-height: 60px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 14 -->
                <div class="col-lg-6 col-md-12 mb-5">
                    <div class="project-card"
                        style="background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); height: 100%;">
                        <div class="project-image"
                            style="height: 250px; overflow: hidden; border-radius: 10px 10px 0 0; position: relative;">
                            <img src="{{ load_asset('images/projects/flange-joint.jpg') }}"
                                alt="Bolted Flange Joint Support" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div style="padding: 20px;">
                            <h3 style="font-size: 1.2rem; color: #333; margin-bottom: 15px;">Provision of Specialized
                                Bolted Flange Joint Support Services
                            </h3>
                            <p style="color: #666; margin-bottom: 15px;">Provision of specialized bolted flange joint
                                support services, ensuring secure and reliable connections in critical systems.</p>
                            <div class="project-details"
                                style="border-top: 1px solid #eee; padding-top: 15px; position: relative;">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <p style="margin-bottom: 5px;"><strong>Client:</strong> Nigeria Liquefied Natural
                                            Gas
                                            Limited</p>
                                        <p style="margin-bottom: 5px;"><strong>Location:</strong> Bonny Island, Rivers
                                            State</p>
                                        <p style="margin-bottom: 5px;"><strong>Date:</strong> May 2021 - July 2021</p>
                                    </div>
                                    <div class="client-logo" style="margin-left: 20px;">
                                        <img src="{{ load_asset('images/clients/resized/6.jpg') }}" alt="NLNG Logo"
                                            style="max-height: 60px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

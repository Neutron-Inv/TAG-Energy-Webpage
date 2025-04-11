<?php $title =' Dashboard' ?>
@extends('layouts.apps')
@section('content')
<div class="col-lg-12 mb12">
    @if(( Auth::user()->email_verified_at) == "")


        <div class="air__layout__content">
            <div class="air__utils__content">
                <div class="col-lg-12">

                    <div class="mb-5">
                        <div class="mb-5">
                            <div style="width: 100%; background: #f2f4f8; padding: 10px 20px; color: #514d6a;">
                                <div style="max-width: 700px; margin: 0px auto; font-size: 14px">
                                    <table style="border-collapse: collapse; border: 0; width: 100%; margin-bottom: 20px">
                                        <tr>
                                            <td style="vertical-align: top;">
                                                <img
                                                    src="{{load_asset('images/logo/cropped.png')}}"
                                                    alt="IGR Team"
                                                    style="height: 40px"
                                                />
                                            </td>
                                            <td style="text-align: right; vertical-align: middle;">
                                                <span style="color: #a09bb9;">
                                                    Tag Energy
                                                </span>
                                            </td>
                                        </tr>
                                    </table>

                                    <div style="padding: 40px 40px 20px 40px; background: #fff;">
                                        <table style="border-collapse: collapse; border: 0; width: 100%;">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h5 style="margin-bottom: 20px; color: #24222f; font-weight: 600">
                                                        Account Activation
                                                        </h5>
                                                        <h6> <b> Dear {{Auth::user()->first_name . " ". Auth::user()->last_name}} </b></h6> <br>
                                                        <p>
                                                            @if (session('resent'))
                                                              <p style="color:green"> A fresh verification link has been sent to  {{ Auth::user()->email}}. </p>
                                                            @endif
                                                            Before proceeding, please check your email for a verification link.
                                                        </p>

                                                        <p> If you did not receive the email, please click the button below to request a fresh activation link </p>
                                                        <div style="text-align: center">
                                                            <a
                                                                href="{{ route('verification.resend') }}"
                                                                style="display: inline-block; padding: 11px 30px 6px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #01a8fe; border-radius: 5px"
                                                            >
                                                                Activate Your Account
                                                            </a>
                                                        </div>
                                                        {{--  <p>If you did not forgot your password you can safely ignore his email.</p>  --}}
                                                        <p>Regards,<br />Tag Energy</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div style="text-align: center; font-size: 12px; color: #a09bb9; margin-top: 20px">
                                        {{--  <p>
                                        Jethro Software Ltd., 21 Ladoke Akintola Avenue, New Bodija, Ibadan, Nigeria

                                        <br />
                                        Powered by Jethro Systems Limited
                                        </p>  --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @else
        <div class="air__subbar">
            <ul class="air__subbar__breadcrumbs mr-4">
                <li class="air__subbar__breadcrumb">
                    <a href="{{route('home')}}" class="air__subbar__breadcrumbLink">TAG Energy </a>
                </li>
                <li class="air__subbar__breadcrumb">
                    <a href="{{ route('home') }}" class="air__subbar__breadcrumbLink air__subbar__breadcrumbLink--current"
                    >Dashboard</a
                    >
                </li>
            </ul>
            <div class="air__subbar__divider mr-4 d-none d-xl-block"></div>
            <p class="color-gray-4 text-uppercase font-size-18 mb-0 mr-4 d-none d-xl-block">{{ date('d-M-Y')}}</p>
            
        </div><br>
        <div class="row">

            <div class="col-xl-12 col-lg-12">
                @include('layouts.alert')
            </div>
           
            <div class="col-xl-8 col-lg-12">
                <div class="card">

                    
                </div>

            </div>

            <div class="col-xl-4 col-lg-12">
                

            </div>
        </div>
    @endif
</div>
@endsection

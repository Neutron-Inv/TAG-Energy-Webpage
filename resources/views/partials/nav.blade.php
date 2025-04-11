<nav class="main-nav">
    <input id="main-menu-state" type="checkbox" />
    <label class="main-menu-btn" for="main-menu-state"> <span class="main-menu-btn-icon"></span> Toggle main menu
        visibility </label>
    <h2 class="nav-brand"><a href="{{ route('tagenergy') }}"><img class="img-fluid header_logo"
                src="{{ load_asset('images/logo/cropped_white.png') }}"><img class="img-fluid logo_stricky"
                src="{{ load_asset('images/logo/cropped.png') }}"></a></h2>
    <ul id="main-menu" class="sm sm-clean">
        <li><a href="{{ route('tagenergy') }}">Home</a></li>
        <li><a href="javascript:void(0)">About Us</a>
            <ul style="background:rgba(0,0,0,0.4);">
                <li><a href="{{ route('get-about') }}">Who we are</a></li>
                <li><a href="{{ route('get-community') }}">In The Communities</a></li>
                <li><a href="{{ route('get-vac-service') }}">Our Valve Assembly Center</a></li>
                <li><a href="{{ route('get-dnv-container-service') }}">Our DNV Container</a></li>
                <li><a href="{{ route('get-past-performance') }}">Past Performance</a></li>
                <li><a href="{{ route('get-quality-policy') }}">Quality Policy</a></li>
                <!-- <li><a href="{{ route('get-gallery') }}">Gallery</a></li> -->
                {{-- <li><a href="{{route('get-team')}}">Our Team</a></li> --}}
            </ul>
        </li>
        <li><a href="javascript:void(0)">Services</a>
            <ul style="background:rgba(0,0,0,0.4);">
                <li><a href="{{ route('get-irm-service') }}">Inspection, Repair and Maintenance</a></li>
                <li><a href="{{ route('get-flange-service') }}">Flange Management Services</a></li>
                {{-- <li><a href="#">Leak Detection &amp; Repairs</a></li> --}}
                <li><a href="{{ route('get-valve-service') }}">Valve Maintenance</a></li>
                <li><a href="{{ route('get-manpower-service') }}">Manpower Support</a></li>
                <li><a href="{{ route('get-procurement-service') }}">Procurement Services</a></li>
                <li><a href="{{ route('get-renewable-service') }}">Renewable Energy</a></li>
            </ul>
        </li>
        <li><a href="{{ route('get-products') }}">Products</a>
            <ul style="background:rgba(0,0,0,0.4);">
                <li><a href="{{ route('get-sealing-service') }}">Sealing Technologies</a></li>
                <li><a href="{{ route('get-bosch-products') }}">Bosch Products</a></li>
                <li><a href="{{ route('get-flow-control-products') }}">Flow Control</a></li>
                <li><a href="{{ route('get-flange-products') }}">Flanges</a></li>
                <li><a href="{{ route('get-pipe-products') }}">Pipes and Pipe Fittings</a></li>
                <li><a href="{{ route('get-insulation-products') }}">Insulation</a></li>
            </ul>
        </li>
        {{-- <li><a href="{{route('get-products')}}">Products</a></li> --}}
        <!--<li><a href="{{ route('get-tagenergy-jobs') }}">Work With Us</a></li>-->
        <li class="last_menu"><a href="{{ route('get-contact') }}">Contact Us</a></li>
    </ul>
</nav>

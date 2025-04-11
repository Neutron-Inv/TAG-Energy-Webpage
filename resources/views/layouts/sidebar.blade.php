<div class="air__menuLeft">
    <div class="air__menuLeft__outer">
        <div class="air__menuLeft__mobileToggleButton air__menuLeft__mobileActionToggle">
            <span></span>
        </div>
        <div class="air__menuLeft__toggleButton air__menuLeft__actionToggle">
            <span></span>
            <span></span>
        </div>
        <a href="javascript: void(0);" class="air__menuLeft__logo">
            <img src="{{load_asset('images/logo/cropped.png')}}" style="width:50px; height:50px" alt="" />

           
            <div class="air__menuLeft__logo__descr">TAG  </div>
           
            <div class="air__menuLeft__logo__name">ENERGY</div>
        </a>
        <a href="javascript: void(0);" class="air__menuLeft__user">
            

            <div class="air__menuLeft__user__name">
                {{--  {{Auth::user()->first_name . ' '. Auth::user()->last_name}}  --}}
            </div>
            <div class="air__menuLeft__user__role">
                {{--  {{Auth::user()->role}}  --}}
            </div>
        </a>
        <div class="air__menuLeft__container air__customScroll">
            <ul class="air__menuLeft__list">

                <li class="air__menuLeft__item">
                    <a href="{{route('home')}}" class="air__menuLeft__link air__sidebar__actionToggle">
                    <i class="fe fe-home air__menuLeft__icon"></i>
                    <span>Dashboard</span>
                    </a>
                </li>
                @if(( Auth::user()->email_verified_at) == "")

                    <li class="air__menuLeft__item">
                        <a href="{{ route('verification.resend') }}" class="air__menuLeft__link">
                        <i class="fe fe-mail air__menuLeft__icon"></i>
                        <span>Resend Link</span>
                        </a>
                    </li>
                @else

                    <li class="air__menuLeft__item">
                        <a href="{{route('administrator.index')}}" class="air__menuLeft__link air__sidebar__actionToggle">
                        <i class="fe fe-users air__menuLeft__icon"></i>
                        <span>Users</span>
                        </a>
                    </li>

                    <li class="air__menuLeft__item">
                        <a href="{{route('gallery.index')}}" class="air__menuLeft__link air__sidebar__actionToggle">
                        <i class="fe fe-image air__menuLeft__icon"></i>
                        <span>Galleries</span>
                        </a>
                    </li>
                    
                    
                @endif
                <li class="air__menuLeft__item">
                    <a href="{{ route('logout')}}" class="air__menuLeft__link">
                    <i class="fe fe-lock air__menuLeft__icon"></i>
                    <span>Log Out</span>
                    </a>
                </li>


            </ul>

        </div>
    </div>
</div>

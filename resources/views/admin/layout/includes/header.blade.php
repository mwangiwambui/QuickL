<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
  <div class="navbar-wrapper">
    <div class="navbar-container content">
      <div class="collapse navbar-collapse show" id="navbar-mobile">
        <ul class="nav navbar-nav mr-auto float-left">
          <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
          <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
        </ul>
        <ul class="nav navbar-nav float-right">
          <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"><img src="{{asset('theme-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"><i></i></span></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="{{asset('theme-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"><span class="user-name text-bold-700 ml-1">{{Auth::user()->name}}</span></span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="{{url('/')}}"><i class="la la-tv"></i> Front End</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="{{url('/logout')}}"><i class="ft-power"></i> Logout</a>
              </div>
            </div>
          </li>
          <li>
            <div class="" style="margin-top:25px;">
              <h4 style="color:white">{{Auth::user()->name}}</h4>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

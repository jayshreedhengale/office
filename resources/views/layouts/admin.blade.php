<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Dashboard - Planet Market Reports</title>
    <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('theme-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme-assets/css/app-lite.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme-assets/css/pages/dashboard-ecommerce.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                <ul class="dropdown-menu">
                  <li class="arrow_box">
                    <form>
                      <div class="input-group search-box">
                        <div class="position-relative has-icon-right full-width">
                          <input class="form-control" id="search" type="text" placeholder="Search here...">
                          <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">         
              <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                  <div class="arrow_box"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i> Russian</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a></div>
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><i class="ft-book"></i> Read Mail</a><a class="dropdown-item" href="#"><i class="ft-bookmark"></i> Read Later</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all Read </a></div>
                </div>
              </li>
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="avatar avatar-online"><img src="{{asset('theme-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="{{asset('theme-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"><span class="user-name text-bold-700 ml-1">{{ Auth::user()->name }}</span></span></a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="{{url('add-employee')}}"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ft-power"></i> Logout</a>
                    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
            <div class="py-3">
                @yield('content')
            </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true" data-img="{{asset('theme-assets/images/backgrounds/02.jpg')}}">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <div class="nav-item mr-auto"><a class="navbar-brand" href="{{url('/')}}"><img class="brand-logo" alt="Planet admin logo" src="{{asset('theme-assets/images/logo/planet.png')}}" style="width: 140px;"></a></div>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="active"><a href="{{url('/')}}"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
          </li>
          <li class=" nav-item"><a href="{{url('/employee')}}"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Employees</span></a>
          </li>
          <li class=" nav-item"><a href="{{url('/holiday')}}"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Holidays</span></a>
          </li>
          <li class=" nav-item"><a href="{{url('/leaves')}}"><i class="ft-box"></i><span class="menu-title" data-i18n="">Leaves</span></a>
          </li>
          <li class=" nav-item"><a href="{{url('/ticket')}}"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Tickets</span></a>
          </li>
          <li class=" nav-item"><a href="{{url('/policies')}}"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Policies</span></a>
          </li>
          
          <li class=" nav-item"><a href="{{url('/performance')}}"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Performance</span></a>
          </li>
          @if(Auth::user()->designation == 'Admin1')
		      <li class=" nav-item"><a href="{{url('/employee-admin')}}"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Profile</span></a>
          </li>
          @endif
		      <li class=" nav-item"><a href="{{url('/news')}}"><i class="ft-layout"></i><span class="menu-title" data-i18n="">News Sharing</span></a>
          </li>
          <li class=" nav-item"><a href="{{url('/otp')}}"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Leads</span></a>
          </li>
        </ul>
      </div>
      <div class="navigation-background"></div>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Chart -->
<div class="row match-height">
    <div class="col-12">
        <div class="">
            <div id="gradient-line-chart1" class="height-250 GradientlineShadow1"></div>
        </div>
    </div>
</div>
<!-- Chart -->
<!-- eCommerce statistic -->
<div class="row">
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted danger position-absolute p-1">Progress Stats</h5>
                <div>
                    <i class="ft-pie-chart danger font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                    <img src="{{asset('theme-assets/images/gallery/statistics_1.jpg')}}" alt="avatar" style="height:150px;">
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted info position-absolute p-1">Activity Stats</h5>
                <div>
                    <i class="ft-activity info font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                    <img src="{{asset('theme-assets/images/gallery/statistics_2.jpg')}}" alt="avatar" style="height:150px;">
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted warning position-absolute p-1">Sales Stats</h5>
                <div>
                    <i class="ft-shopping-cart warning font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                    <img src="{{asset('theme-assets/images/gallery/statistics_3.jpg')}}" alt="avatar" style="height:150px;">
                </div>
            </div>
        </div>
    </div>
</div><br><br>
<!--/ eCommerce statistic -->

<!-- Statistics -->
<div class="row match-height">
    <div class="col-xl-4 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="heading-multiple-thumbnails">Multiple Thumbnail</h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                    <div class="heading-elements">
                        <span class="avatar">
                            <img src="{{asset('theme-assets/images/portrait/small/avatar-s-2.png')}}" alt="avatar">
                        </span>
                        <span class="avatar">
                            <img src="{{asset('theme-assets/images/portrait/small/avatar-s-3.png')}}" alt="avatar">
                        </span>
                        <span class="avatar">
                            <img src="{{asset('theme-assets/images/portrait/small/avatar-s-4.png')}}" alt="avatar">
                        </span>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">About Us</h4>
                        <p class="card-text">Planet Market Reports gives statistical surveying reports to businesses, people and associations with a goal of helping them in their decision making process.  </p>
                        <p class="card-text">We have huge database of market research reports & company profiles across globe.  We offer premium progressive statistical surveying, market research reports, analysis & forecast data for industries and governments around the globe.</p>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <h4 class="card-title">Recent News</h4>
                    <h6 class="card-subtitle text-muted">Carousel Card With Header & Footer</h6>
                </div>
                <div id="carousel-area" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-area" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-area" data-slide-to="1"></li>
                        <li data-target="#carousel-area" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="{{asset('theme-assets/images/carousel/08.jpg')}}" class="d-block w-100" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('theme-assets/images/carousel/03.jpg')}}" class="d-block w-100" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('theme-assets/images/carousel/01.jpg')}}" class="d-block w-100" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-area" role="button" data-slide="prev">
                            <span class="la la-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    <a class="carousel-control-next" href="#carousel-area" role="button" data-slide="next">
                            <span class="la la-angle-right icon-next" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                </div>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                <span class="float-left">2 days ago</span>
                <span class="tags float-right">
                    <span class="badge badge-pill badge-primary">Branding</span>
                    <span class="badge badge-pill badge-danger">Design</span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Employees</h4>
                <a class="heading-elements-toggle">
                    <i class="fa fa-ellipsis-v font-medium-3"></i>
                </a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li>
                            <a data-action="reload">
                                <i class="ft-rotate-cw"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div id="recent-buyers" class="media-list">
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online">
                                <img class="media-object rounded-circle" src="{{asset('theme-assets/images/portrait/small/avatar-s-7.png')}}" alt="Generic placeholder image">
                                <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <span class="list-group-item-heading">Parmeshwar Karkale

                            </span>
                            <p class="list-group-item-text mb-0">
                                <span class="blue-grey lighten-2 font-small-3">Manager</span>
                            </p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-away">
                                <img class="media-object rounded-circle" src="{{asset('theme-assets/images/portrait/small/avatar-s-8.png')}}" alt="Generic placeholder image">
                                <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <span class="list-group-item-heading">Pooja 

                            </span>
                            <p class="list-group-item-text mb-0">
                                <span class="blue-grey lighten-2 font-small-3">Sales & HR</span>
                            </p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-busy">
                                <img class="media-object rounded-circle" src="{{asset('theme-assets/images/portrait/small/avatar-s-9.png')}}" alt="Generic placeholder image">
                                <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <span class="list-group-item-heading">Siddharth Kamble

                            </span>
                            <p class="list-group-item-text mb-0">
                                <span class="blue-grey lighten-2 font-small-3">Digital Marketing Executive</span>
                            </p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online">
                                <img class="media-object rounded-circle" src="{{asset('theme-assets/images/portrait/small/avatar-s-10.png')}}" alt="Generic placeholder image">
                                <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <span class="list-group-item-heading">Jayshree Dhengale

                            </span>
                            <p class="list-group-item-text mb-0">
                                <span class="blue-grey lighten-2 font-small-3">Web Developer</span>
                            </p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online">
                                <img class="media-object rounded-circle" src="{{asset('theme-assets/images/portrait/small/avatar-s-10.png')}}" alt="Generic placeholder image">
                                <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <span class="list-group-item-heading">Pallavi Khonde

                            </span>
                            <p class="list-group-item-text mb-0">
                                <span class="blue-grey lighten-2 font-small-3">Digital Marketing Executive</span>
                            </p>
                        </div>
                    </a>
					           <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online">
                                <img class="media-object rounded-circle" src="{{asset('theme-assets/images/portrait/small/avatar-s-11.png')}}" alt="Generic placeholder image">
                                <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <span class="list-group-item-heading">Krushna Suryavanshi

                            </span>
                            <p class="list-group-item-text mb-0">
                                <span class="blue-grey lighten-2 font-small-3">Digital Marketing Executive</span>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Statistics -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2020  &copy; Copyright <a class="text-bold-800 grey darken-2" href="#" target="_blank">Planet Market Reports</a></span>
      </div>
    </footer>

    <script src="{{asset('theme-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme-assets/js/core/app-menu-lite.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme-assets/js/core/app-lite.js')}}" type="text/javascript"></script>
    <!-- <script src="{{asset('theme-assets/js/scripts/pages/dashboard-lite.js')}}" type="text/javascript"></script> -->
   
  </body>
</html>
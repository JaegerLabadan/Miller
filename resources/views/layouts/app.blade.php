<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Miller Promotions</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/miller/favs.png') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/educate-custon-icon.css') }}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset("css/calendar/fullcalendar.min.css") }}">
    <link rel="stylesheet" href="{{ asset('css/calendar/fullcalendar.print.min.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
	    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
    </script>
</head>

<body>
    @if(count($errors) > 0)
      <div class="alert alert-danger">{{ $errors }}</div>
    @endif

    @if(count($user) > 0)
        @if($position == 'admin')
          <div class="left-sidebar-pro">
              <nav id="sidebar" class="">
                  <div class="sidebar-header">
                      <a href="{{ url('/') }}"><img class="main-logo" src="{{ asset('img/miller/logos.png') }}" alt="" /></a>
                      <strong><a href="index.html"><img src="{{ asset('img/miller/favs.png') }}" alt="" /></a></strong>
                  </div>
                  <div class="left-custom-menu-adp-wrap comment-scrollbar">
                      <nav class="sidebar-nav left-sidebar-menu-pro">
                          <ul class="metismenu" id="menu1">
                              <li class="active">
                                  <a href="{{ url('dashboard') }}">
                        <span class="educate-icon educate-home icon-wrap"></span>
                        <span class="mini-click-non">Dashboard</span>
                    </a>
                              </li>
                              <li>
                                  <a href="{{ url('vendors') }}">
                                        <span class="educate-icon educate-event icon-wrap sub-icon-mg"></span>
                                        <span class="mini-click-non">Vendor List</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ url('publish') }}" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Create Event</span></a>
                                  
                              </li>
                            
                              <li>
                                  <a href="reports.html" aria-expanded="false"><span class="educate-icon educate-charts icon-wrap"></span> <span class="mini-click-non">Reports</span></a>
                                  
                              </li>
                          </ul>
                      </nav>
                  </div>
              </nav>
          </div>
          <!-- End Left menu area -->
          <!-- Start Welcome area -->
          <div class="all-content-wrapper">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="logo-pro">
                              <a href="index.html"><img class="main-logo" src="{{ asset('img/miller/logos.png') }}" alt="" /></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="header-advance-area">
                  <div class="header-top-area">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="header-top-wraper">
                                      <div class="row">
                                          <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                              <div class="menu-switcher-pro">
                                                  <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                <i class="educate-icon educate-nav"></i>
                              </button>
                                              </div>
                                          </div>
                                          <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                              
                                          </div>
                                          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                              <div class="header-right-info">
                                                  <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                      
                                                      <li class="nav-item">
                                                          <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <img src="img/product/pro4.jpg" alt="" />
                                    <span class="admin-name">{{ $user }}</span>
                                    <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                  </a>
                                                          <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                              <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a>
                                                              </li>
                                                              <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                              </li>
                                                              <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                              </li>
                                                              <li><a href="{{ url('logout') }}"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                              </li>
                                                          </ul>
                                                      </li>
                                                      
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Mobile Menu start -->
                  <div class="mobile-menu-area">
                      <div class="container">
                          <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="mobile-menu">
                                      <nav id="dropdown">
                                          <ul class="mobile-menu-nav">
                                              <li><a data-toggle="collapse" data-target="#Charts" href="#">Dashboard <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                  
                                              </li>
                                              <li><a href="events.html">Vendor List</a></li>
                                              <li><a data-toggle="collapse" data-target="#demoevent" href="#">Create Event <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                  
                                              </li>
                                              <li><a data-toggle="collapse" data-target="#demopro" href="#">Reports <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                              
                                              </li>
                                              
                                          </ul>
                                      </nav>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
        @else
        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <a href="index.html"><img class="main-logo" src="{{ asset('img/miller/logos.png') }}" alt="" /></a>
                    <strong><a href="{{ url('/') }}"><img src="{{ asset('img/miller/favs.png') }}" alt="" /></a></strong>
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu" id="menu1">
                            <li class="active">
                                <a href="{{ url('dashboard') }}">
                      <span class="educate-icon educate-home icon-wrap"></span>
                      <span class="mini-click-non">Dashboard</span>
                  </a>
                            </li>
                            <li >
                                <a href="{{ url('form') }}">
                                      <span class="educate-icon educate-library icon-wrap"></span>
                                      <span class="mini-click-non">Form</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
        <!-- End Left menu area -->
        <!-- Start Welcome area -->
        <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="index.html"><img class="main-logo" src="img/miller/logos.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-advance-area">
                <div class="header-top-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="header-top-wraper">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                            <div class="menu-switcher-pro">
                                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                              <i class="educate-icon educate-nav"></i>
                            </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                            
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                            <div class="header-right-info">
                                                <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                    
                                                    <li class="nav-item">
                                                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                  <img src="img/product/pro4.jpg" alt="" />
                                  <span class="admin-name">{{ $user }}</span>
                                  <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                </a>
                                                        <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                            <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a>
                                                            </li>
                                                            <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                            </li>
                                                            <li><a href="#"><span class="edu-icon edu-money author-log-ic"></span>User Billing</a>
                                                            </li>
                                                            <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                            </li>
                                                            <li><a href="{{ url('logout') }}"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul class="mobile-menu-nav">
                                            <li><a data-toggle="collapse" data-target="#Charts" href="#">Dashboard <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                
                                            </li>
                                            <li><a href="events.html">Vendor List</a></li>
                                            <li><a data-toggle="collapse" data-target="#demoevent" href="#">Create Event <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#demopro" href="#">Reports <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            
                                            </li>
                                            <li >
                                                <a href="form.html">
                                                      <span class="educate-icon educate-library icon-wrap"></span>
                                                      <span class="mini-click-non">Form</span>
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @yield('content');
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Created by <a href="http://www.creativeoutsourcesolutions.com">Creative Outsource Solutions</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- jquery
		============================================ -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{ asset('js/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/counterup/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/counterup/counterup-active.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ asset('js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('js/morrisjs/raphael-min.js') }}"></script>
    <script src="{{ asset('js/morrisjs/morris.js') }}"></script>
    <script src="{{ asset('js/morrisjs/morris-active.js') }}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <script src="{{ asset('js/sparkline/sparkline-active.js') }}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{ asset('js/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('js/calendar/fullcalendar-active.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="{{ asset('js/tawk-chat.js') }}"></script>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/bootstrap.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/testi.css") }}"">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/set_up.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favs.png">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
</head>
<body>
    <!-- --------------------------------------------------------------------- -->
    @if(count($user) == 0)
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="images/new-logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class=" navbar-nav mr-auto ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Expos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Calendar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('testimonials') }}">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('login') }}">Login</a>
                    </li>
                </ul>
                <span class="navbar-text my-2 my-lg-0" style="color: #fff;">
                    CALL 888- 308 - 3035
                </span>
                </div>
            </nav>
        </header>
    @else
    <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="images/new-logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class=" navbar-nav mr-auto ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Expos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Calendar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('testimonials') }}">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('login') }}">Login</a>
                    </li>
                </ul>
                <span class="navbar-text my-2 my-lg-0" style="color: #fff;">
                    CALL 888- 308 - 3035
                </span>
                </div>
            </nav>
        </header>
    @endif


        @yield('content')

</body>
    
<!-- ------------------------Footer---------------------------------------- -->


 <footer class="footer_area" id="contact">
    <div class="subscrib_area">
        <div class="container">
            <div class="subscrib_inner">
                <div class="main_title">
                    <h1 class="agay">SIGNUP TO RECEIVE PROMO'S & LATEST EVENTS</h1>
                </div>
                <div class="input-group">
                    <div class="col-sm-12" style="    padding-left: 105px;">
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="name" name="name" style="text-align: center; border:4px solid #01D1EB; border-radius: 20px;" placeholder="FIRST NAME*">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="name" name="name" style="text-align: center; border:4px solid #01D1EB; border-radius: 20px;" placeholder="LAST NAME*">
                            </div>
                            <div class="col-sm-3">
                                <input type="email" class="form-control" id="name" name="name" style="text-align: center; border:4px solid #01D1EB; border-radius: 20px;" placeholder="EMAIL*">
                            </div>
                            <div class="col-sm-3">
                                <button class="btn" style="background: #00CFE9; border-radius: 20px; color: #fff; font-weight: 800;">
                                    SIGN UP NOW
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_widget_area">
        <div class="container">
            <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-3" style="text-align: center;">
                    <img src="{{ asset('images/square.png') }}" >
                </div>
                <div class="col-sm-3" style="text-align: center;">
                    <img src="{{ asset("images/book.png") }}">
                </div>
                <div class="col-sm-3" style="text-align: center;">
                    <img src="{{ asset("images/wsba.png") }}">
                </div>
                <div class="col-sm-3" style="text-align: center;">
                    <img src="{{ asset("images/ins.png") }}">
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="footer_copy_right">
            <div class="container">
                <div class="text-center">
                    <p class="copyright puti" style="font-weight: 800; text-align: center;">
                    <a href="{{ url('/') }}">HOME</a> | <a href="#">EXPOS</a> | <a href="#">EVENTS</a> | <a href="#">CALENDAR</a> | <a href="{{ url('contact') }}">CONTACTS</a> | <a href="#">DOWNLOADS</a> | <a href="#">VENDOR LIST</a> | <a href="{{ url('setup') }}">SET-UP</a> | <a href="#">PRIVACY POLICY</a>
                    </p>
                </div>
                <div class="lol">
                <p style="color: white;">
                    <span class="text-center">Direct sales vendors cannot participate in an event that has a rep  for their company participating.</span><br>
                    <span>To cut down the number of vendors calling us, to ask if a vendor from thier company was in a</span><br>
                    <span>specific event. We developed this list for their review.</span>
                </p>
                </div>
                <div class="text-center">
                    <p style="margin-bottom: 0; color: white; text-align: center;">2018 MILLER PROMOTIONS | ALL RIGHTS RESERVED</p>
                    <P style="color: white; text-align: center;">WEB BY <a style="color: #fff;" class="create" href="http://creativeoutsourcesolutions.com">CREATIVE OUTSOURCE SOLUTIONS</a></P>
                </div>
            </div>
        </div>
    </footer>

<!-- ---------------------------------------------------------------- -->



<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{{ asset('landing/bootstrap.min.js') }}"></script>
<script type="text/javascript">
var $div = $('tet');

// Run the following when the window is resized, and also trigger it once to begin with.
$(window).resize(function () {
   // Get the current height of the div and save it as a variable.
   var height = $div.height();
   // Set the font-size and line-height of the text within the div according to the current height.
   $div.css({
      'font-size': (height/2) + 'px',
      'line-height': height + 'px'
   })
}).trigger('resize');​
</script>
</body>
</html>
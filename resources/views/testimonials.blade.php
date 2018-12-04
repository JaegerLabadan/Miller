<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("css/testi.css") }}"">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favs.png">
</head>
<body>
	<!-- --------------------------------------------------------------------- -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-collapse collpase">
		<div class="container">
	  <a class="navbar-brand" href="index.html"><img src="images/new-logo.png"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarText">
	    <ul class="tonga navbar-nav mr-auto">
            <li class="nav-item active" >
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
	    <span class="navbar-text" style="color: #fff;">
	      CALL 888- 308 - 3035
	    </span>
	  </div>
	  </div>
	</nav>
 <!-- ---------------------------------------------------------------- -->


 <!-- ----------------------------Section 1------------------------------------ -->

<div class="sec2 wrapper" style="    padding-top: 185px; padding-bottom: 80px;">
        <div class="container">

            <h1 class="agay">TESTIMONIALS</h1>

            <div class="row" style="    text-align: center; padding-bottom: 50px;">
                <div class="col">
                    <span style="font-weight: 800;">
                        We always love to hear from you about the event!
                    </span> 
                </div>
            </div>

            <h3 class="agays">
                "1st Annual Luv That Black N Gold Gift And Craft Expo  - Shoppes At Northway Sept. 2012"
            </h3>

            <div class="container caros">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset("images/user.png") }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/user1.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/user.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>

            <h3 class="agays">
                "CHRISTMAS GIFT AND CRAFT EXPO 2010"
            </h3>

            <div class="container caros">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/user.pn') }}g" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/user1.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/user.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>

            <h3 class="agays">
                "GIFTS AND CRAFTS FOR VALENTINE EXPO 2010"
            </h3>

            <div class="container caros">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/user.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/user1.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/user.pn') }}g" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>

            <h3 class="agays">
                "WINTER MELTDOWN AT WESTMORELAND MALL"
            </h3>

            <div class="container caros">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/user.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/user1.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/user.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>

            <h3 class="agays">
                "GIFTS AND CRAFTS FOR VALENTINE EXPO 2014"
            </h3>

            <div class="container caros">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset("images/user.png") }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset("images/user1.png") }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/user.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>

            <h3 class="agays">
                "GIFTS AND CRAFTS FOR VALENTINE EXPO 2013"
            </h3>

            <div class="container caros">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset("images/user.png") }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/user1.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset("images/user.png") }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>

            <h3 class="agays">
                "GIFTS AND CRAFTS FOR VALENTINE EXPO 2013"
            </h3>

            <div class="container caros">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/user.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/user1.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset("images/user.png") }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>

            <h3 class="agays">
                "CHRISTMAS GIFT AND CRAFT EXPO 2011"
            </h3>

            <div class="container caros">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/user.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset("images/user1.png") }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset("images/user.png") }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>

            <h3 class="agays">
                "PAMPERFEST 2010"
            </h3>

            <div class="container caros">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/user.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/user1.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset("images/user.png") }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>

            <h3 class="agays">
                "PAMPERFEST 2010"
            </h3>

            <div class="container caros">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset("images/user.png") }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/user1.pn') }}g" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/user.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>

            <h3 class="agays">
                "ALWAYS WORTH IT"
            </h3>

            <div class="container caros">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/user.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/user1.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/user.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>

            <h3 class="agays">
                "MORE THAN PROFESSIONAL"
            </h3>

            <div class="container caros">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/user.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/user1.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/user.png') }}" alt="Avatar" style="width:90px"><br>
                        <p><span>Chris Fox.</span> CEO at Mighty Schools.</p>
                        <p>John Doe saved us from a web disaster.</p>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
            
        </div>
    </div>

 <!-- ---------------------------------------------------------------- -->


 <section class="sec3">
     <div class="container caro">
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="    height: 245px;">
       <ol class="carousel-indicators">
         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
       </ol>
       <div class="carousel-inner" style="    height: 205px;">
         <div class="carousel-item active">
             <div class="col-sm-12">
                 <div class="row">
                     <div class="col-sm-6" style="padding: 0;">
                         <img class="d-block w-100" src="{{ asset('images/cinema.jpeg') }}" alt="First slide">
                     </div>
                     <div class="col-sm-6" style="background: #00D0EA; padding-top: 15px;">
                         <h1 style="text-align: center; font-family: 'Montserrat', sans-serif!important; font-weight: 800;">
                             CATCH STACY RICH ON:
                         </h1>
                         <h5 style="color: #fff; padding-left:45px;">
                             NOVEMBER 25 & 26<br>
                             6TH ANNUAL HOLIDAY<br>
                             GIVING GIFT & CARFT EXPO<br>
                             PITTSBURGH MILLS, PA<br>
                             9AM TILL 5PM
                         </h5>
                     </div>
                 </div>
             </div>
         </div>
         
         <div class="carousel-item">
           <div class="col-sm-12">
                 <div class="row">
                     <div class="col-sm-6" style="padding: 0;">
                         <img class="d-block w-100" src="{{ asset('images/cinema.jpeg') }}" alt="First slide">
                     </div>
                     <div class="col-sm-6" style="background: #00D0EA; padding-top: 15px;">
                         <h1 style="text-align: center; font-family: 'Montserrat', sans-serif!important; font-weight: 800;">
                             CATCH STACY RICH ON:
                         </h1>
                         <h5 style="color: #fff; padding-left:45px;">
                             NOVEMBER 25 & 26<br>
                             6TH ANNUAL HOLIDAY<br>
                             GIVING GIFT & CARFT EXPO<br>
                             PITTSBURGH MILLS, PA<br>
                             9AM TILL 5PM
                         </h5>
                     </div>
                 </div>
             </div>
         </div>
         <div class="carousel-item">
           <div class="col-sm-12">
                 <div class="row">
                     <div class="col-sm-6" style="padding: 0;">
                         <img class="d-block w-100" src="{{ asset('images/cinema.jpeg') }}" alt="First slide">
                     </div>
                     <div class="col-sm-6" style="background: #00D0EA; padding-top: 15px;">
                         <h1 style="text-align: center; font-family: 'Montserrat', sans-serif!important; font-weight: 800;">
                             CATCH STACY RICH ON:
                         </h1>
                         <h5 style="color: #fff; padding-left:45px;">
                             NOVEMBER 25 & 26<br>
                             6TH ANNUAL HOLIDAY<br>
                             GIVING GIFT & CARFT EXPO<br>
                             PITTSBURGH MILLS, PA<br>
                             9AM TILL 5PM
                         </h5>
                     </div>
                 </div>
             </div>
         </div>
       </div>
       <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
       </a>
     </div>
     </div>

     <div class="container days">
         <div id="carouselExampleSlidesOnly" class="carousel slide" data-interval="10000" data-ride="carousel">
           <div class="carousel-inner">
             <div class="carousel-item active">
               <div class="col-sm-12">
                 <div class="row">
                     <div class="col-sm-4">
                         <div class="tri">
                             <h1 class="hi">
                                 3
                             </h1>
                             <span class="sp">
                                 DAYS<br>
                                 TO GO
                             </span>
                         </div>
                     </div>
                     <div class="col-sm-8">
                         <h1 class="bul">
                             NOVEMBER 25 - 30 2018
                         </h1>
                         <h1 class="bul" style="line-height: .2;">
                             6th Annual Holiday Giving
                         </h1><br>
                         <span style="color: #fff; font-weight: 800;">
                             Expo Galleria at Pittsburgh Mills, Tarentum,<br>
                             Pa. (Benfits the Pittsburgh Food Bank)
                         </span>
                         <p style="margin-top: 1rem;">
                             <button class="btn" style="margin-right: 80px; border-radius: 20px; background: #02F5FD; color: #fff;">ALL EVENT LIST</button>
                             <button class="btn" style="border-radius: 20px; background: #00CDDB; color: #fff;">JOIN THIS EVENT</button>
                         </p>
                     </div>
                 </div>
               </div>
             </div>
             <div class="carousel-item">
               <div class="col-sm-12">
                 <div class="row">
                     <div class="col-sm-4">
                         <div class="tri">
                             <h1 class="hi">
                                 4
                             </h1>
                             <span class="sp">
                                 DAYS<br>
                                 TO GO
                             </span>
                         </div>
                     </div>
                     <div class="col-sm-8">
                         <h1 class="bul">
                             NOVEMBER 25 - 30 2018
                         </h1>
                         <h1 class="bul" style="line-height: .2;">
                             6th Annual Holiday Giving
                         </h1><br>
                         <span style="color: #fff; font-weight: 800;">
                             Expo Galleria at Pittsburgh Mills, Tarentum,<br>
                             Pa. (Benfits the Pittsburgh Food Bank)
                         </span>
                         <p style="margin-top: 1rem;">
                             <button class="btn" style="margin-right: 80px; border-radius: 20px; background: #02F5FD; color: #fff;">ALL EVENT LIST</button>
                             <button class="btn" style="border-radius: 20px; background: #00CDDB; color: #fff;">JOIN THIS EVENT</button>
                         </p>
                     </div>
                 </div>
               </div>
             </div>
             <div class="carousel-item">
               <div class="col-sm-12">
                 <div class="row">
                     <div class="col-sm-4">
                         <div class="tri">
                             <h1 class="hi">
                                 5
                             </h1>
                             <span class="sp">
                                 DAYS<br>
                                 TO GO
                             </span>
                         </div>
                     </div>
                     <div class="col-sm-8">
                         <h1 class="bul">
                             NOVEMBER 25 - 30 2018
                         </h1>
                         <h1 class="bul" style="line-height: .2;">
                             6th Annual Holiday Giving
                         </h1><br>
                         <span style="color: #fff; font-weight: 800;">
                             Expo Galleria at Pittsburgh Mills, Tarentum,<br>
                             Pa. (Benfits the Pittsburgh Food Bank)
                         </span>
                         <p style="margin-top: 1rem;">
                             <button class="btn" style="margin-right: 80px; border-radius: 20px; background: #02F5FD; color: #fff;">ALL EVENT LIST</button>
                             <button class="btn" style="border-radius: 20px; background: #00CDDB; color: #fff;">JOIN THIS EVENT</button>
                         </p>
                     </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
     </div>
 </section>

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
                   <section class="customer-logos slider">
                      <div class="slide"><img src="images/square.png" ></div>
                      <div class="slide"><img src="images/book.png"></div>
                      <div class="slide"><img src="images/wsba.png"></div>
                      <div class="slide"><img src="images/ins.png"></div>
                      <div class="slide"><img src="images/square.png" ></div>
                      <div class="slide"><img src="images/book.png"></div>
                      <div class="slide"><img src="images/wsba.png"></div>
                   </section>
                </div>
            </div>
            <div class="footer_copy_right">
                    <div class="container">
                        <div class="text-center">
                            <p class="copyright puti" style="font-weight: 800;">
                            <a href="#">HOME</a> | <a href="#">EXPOS</a> | <a href="#">EVENTS</a> | <a href="#">CALENDAR</a> | <a href="#">CONTACTS</a> | <a href="#">DOWNLOADS</a> | <a href="#">VENDOR LIST</a> | <a href="{{ url('setup') }}">SET-UP</a> | <a href="#">PRIVACY POLICY</a>
                            </p>
                        </div>
                        <div class="lol">
                        <p>
                            <span class="text-center">Direct sales vendors cannot participate in an event that has a rep  for their company participating.</span><br>
                            <span>To cut down the number of vendors calling us, to ask if a vendor from thier company was in a</span><br>
                            <span>specific event. We developed this list for their review.</span>
                        </p>
                        </div>
                        <div class="text-center">
                            <p style="margin-bottom: 0;">2018 MILLER PROMOTIONS | ALL RIGHTS RESERVED</p>
                            <P>WEB BY <a style="color: #fff;" class="create" href="http://creativeoutsourcesolutions.com">CREATIVE OUTSOURCE SOLUTIONS</a></P>
                        </div>
                    </div>
                </div>
            </footer>

        <!-- ---------------------------------------------------------------- -->



	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js"') }}></script>
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

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.customer-logos').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });

    </script>
</body>
</html>
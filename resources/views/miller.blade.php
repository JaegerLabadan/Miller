@extends('layouts.landing')

@section('content')
<div class="cont">
	<div class="container ">
            <div class="row " style="columns: 2;">
                <div class=" col-md-5 clos" >
                    <div class="lift" style="padding-top: 45px">
                    <img src="{{ asset('images/lady.png') }}" style="    float: right;">
                    </div>
                </div>
                <div class="col-md-7 roww" style="padding-top: 190px;">
                    <div class="right">
                    <h1 class="heading1" style="text-align: right;">Your Perfect Venue</h1>
                    <h5 class="heading3">Over 22 Years of Experience<br>
                        In helping turn passions into profits
                    </h5>
                    <div class="mas">
                    <button class="btn but">
                        <a href="{{ url('dashboard') }}" style="text-decoration: none; color: white;">Book an event Now</a>
                    </button>
                    </div>
                    <p class="para">Gift & Craft Expo | Pamperfest | Health Expo | Food Truck Fest</p>
                    </div>
                </div>
            </div>
	</div>
</div>

 <!-- ---------------------------------------------------------------- -->


 <!-- ----------------------------Section 2------------------------------------ -->

 <section class="sec2s padtop">
        <div class="container">
            <div class="col-sm-12">
                <div class="row kini">
                    <div class="col-sm-4">
                        <div class="flip-box">
                          <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="images/icon1.png" height="100" width="100">
                            </div>
                            <div class="flip-box-back">
                                <img src="images/icon1.png" height="100" width="100">
                              <p class="itim">We Create your Perfect venue for promoting your brand</p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="flip-box">
                          <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="images/icon2.png" height="100" width="100">
                            </div>
                            <div class="flip-box-back">
                              <img src="images/icon2.png" height="100" width="100">
                              <p class="itim">22+ yrs experience helping hobbyists  turn their passion to profitable business</p>
                            </div>
                          </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-4">
                        <div class="flip-box">
                          <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="images/icon3.png" height="100" width="100">
                            </div>
                            <div class="flip-box-back">
                                <img src="images/icon3.png" height="100" width="100">
                                <p class="itim">Engage w/ your customers & build a strong & successful business relationship</p>
                            </div>
                          </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

 <!-- ---------------------------------------------------------------- -->

  <!-- ----------------------------Section 3------------------------------------ -->

<!-- <section class="sec3 padtop blue">
	<div class="container" style="padding-right: 0; padding-left: 0;">
		<div class="col-sm-12">
			<div class="col-sm-8 tet" style="padding: 20px;">
				<h1>
					What is Lorem Ipsum?
				</h1>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
				</p>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
				</p>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
				</p>
			</div>
			<div class="col-sm-4" style="padding-left: 0; padding-right: 0;">
				<img src="images/cinema.jpeg" height="100%" width="100%" style="overflow: visible;width: 484px;">
			</div>
		</div>
	</div>
</section> -->
<section class="section2 blu2">
    <div class="container">
        <div class="row">
            <div class="col" style="text-align: center;">
                <div class="textni">
                    <h1>
                        ABOUT MILLER PROMOTIONS
                    </h1>
                    <p style="color: white;">
                        Miller Promotions has been organizing and promoting events
                        in the Pittsburgh area for over 22 years.  
                    </p>
                    <p style="color: white;">
                        We are driven to provide incomparable shopping experiences
                        while displaying some of the most extraordinary gifts and crafts
                        from the Tri-State area. The display of unique gift items in a
                        beautiful shopping environment has drawn loyal eclectic shoppers
                        for years.
                    <p style="color: white;">
                        We currently organize 31 events per year, with anticipation of adding
                        more shows to our schedule in 2018. Please visit us often for updates,
                        or join us on facebook.
                    </p>
                    <p style="color: white;">
                        Our Mission is to provide a community event that brings highlight the businesses
                        within the community that the event is being held while encouraging others to
                        support "small business" from the area.
                    </p>
                </div>
            </div>
            <div class="col" style="text-align: center;">
                <img class="imahe" src="{{ asset('images/kil.png') }} ">
            </div>
        </div>
    </div> 
</section>

<section class="sec3">
        <div class="container caro">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="    height: 312px;">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" style="    height: 270px;">
        @if (count($vendors) == 1)
            @for ($i = 0; $i < count($vendors); $i++)
                <div class="carousel-item active">
                        <div class="row">
                            <div class="col" style="padding: 0;">
                                <img class="d-block w-100" src="images/stacy.png" style="height: 271px;" alt="First slide">
                            </div>
                            <div class="col" style="background: #00D0EA; padding-top: 15px;">
                                <h1 style="text-align: center; font-family: 'Montserrat', sans-serif!important; font-weight: 800;">
                                    CATCH STACY RICH ON:
                                </h1>
                                <h5 style="color: #fff; padding-left:45px;">
                                        <?php
                                            $start = $vendors[0]->start;
                                            $end = $vendors[0]->end;
        
                                            $new_start = date('F d', strtotime($start));
                                            $new_end = date('d', strtotime($end));
                                            echo "$new_start", " ", "&", " ", "$new_end";
                                        ?><br>
                                        {{ $vendors[0]->event_name }}<br>
                                    </h5>
                            </div>
                        </div>
                </div>
            @endfor
        @else
            <div class="carousel-item active">
                    <div class="row">
                        <div class="col" style="padding: 0;">
                            <img class="d-block w-100" src="images/stacy.png" style="height: 271px;" alt="First slide">
                        </div>
                        <div class="col" style="background: #00D0EA; padding-top: 15px;">
                            <h1 style="text-align: center; font-family: 'Montserrat', sans-serif!important; font-weight: 800;">
                                CATCH STACY RICH ON:
                            </h1>
                            <h5 style="color: #fff; padding-left:45px;">
                                    <?php
                                        $start = $vendors[0]->start;
                                        $end = $vendors[0]->end;

                                        $new_start = date('F d', strtotime($start));
                                        $new_end = date('d', strtotime($end));
                                        echo "$new_start", " ", "&", " ", "$new_end";
                                    ?><br>
                                    {{ $vendors[0]->event_name }}<br>
                                </h5>
                        </div>
                    </div>
            </div>
            @for ($z = 0; $z < count($vendors); $z++)
            <div class="carousel-item">
                <div class="row">
                    <div class="col" style="padding: 0;">
                        <img class="d-block w-100" src="images/stacy.png" style="height: 271px;" alt="First slide">
                    </div>
                    <div class="col" style="background: #00D0EA; padding-top: 15px;">
                        <h1 style="text-align: center; font-family: 'Montserrat', sans-serif!important; font-weight: 800;">
                                CATCH <span style="text-transform: uppercase">{{ $vendors[$z]->vendor_name }}</span> ON:
                        </h1>
                        <h5 style="color: #fff; padding-left:45px;">
                            <?php
                                $start = $vendors[$z]->start;
                                $end = $vendors[$z]->end;

                                $new_start = date('F d', strtotime($start));
                                $new_end = date('d', strtotime($end));
                                echo "$new_start", " ", "&", " ", "$new_end";
                            ?><br>
                            {{ $vendors[$z]->event_name }}<br>
                        </h5>
                    </div>
                </div>
            </div> 
            @endfor
        @endif
        
    
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
            @if (count($events) == 1)
                @for ($i = 0; $i < count($events)-2; $i++)           
                <div class="carousel-item active">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-4 likod">
								<div class="tri">
										<?php
										
										$current = date('Y-m-d');
										$start = $events[$i]->start;
										$date1 = new Datetime($current);
										$date2 = new Datetime($start);
										$diff = $date2->diff($date1)->format('%a');
										$days = intval($diff);
										if($days == 1){ 
											echo "<h1 class='hi'>".$days."</h1><span class='sp'>DAY TO GO<br></span>";
										}
										elseif($days == 0) {
											echo "<h1 class='hi'>".$days."</h1><span class='sp'>NOW<br></span>";   
										}
										else{
											echo "<h1 class='hi'>".$days."</h1><span class='sp'>DAYS TO GO<br></span>";
										}
										
										?>
								</div>
							</div>
							<div class="col-sm-8">
								<h1 class="bul">
									<?php
									$start = $events[$i]->start;
									$end = $events[$i]->end;
	
									$new_start = date('F d', strtotime($start));
									$new_end = date('d', strtotime($end));
									$year = date('Y', strtotime($end));
									echo "$new_start", " ", "-", " ", "$new_end", " ", "$year";
								?>
								</h1>
								<h1 class="bul"">
									{{ $events[$i]->event_name }}
								</h1><br>
								<span style="color: #fff; font-weight: 800;">
									{{ $events[$i]->location }}<br>
									Pa. (Benfits the Pittsburgh Food Bank)
								</span>
								<p style="margin-top: 1rem;">
									<button class="btn" style="margin-right: 80px; border-radius: 20px; background: #02F5FD; color: #fff;"><a style="color: #ffff; text-decoration: none;" href="#">ALL EVENT LIST</a></button>
									<button class="btn" style="border-radius: 20px; background: #00CDDB; color: #fff;"><a style="color: #ffff; text-decoration: none;" href="{{ url('form') }}">JOIN THIS EVENT</a></button>
								</p>
							</div>
						</div>
					</div>
                </div>
                @endfor
            @else
                @for ($i = 0; $i < count($events)-2; $i++)           
                <div class="carousel-item active">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-4 likod">
                                <div class="tri">
                                        <?php
                                            
                                            $current = date('Y-m-d');
                                            $start = $events[$i]->start;
                                            $date1 = new Datetime($current);
                                            $date2 = new Datetime($start);
                                            $diff = $date2->diff($date1)->format('%a');
                                            $days = intval($diff);
                                            if($days == 1){ 
                                                echo "<h1 class='hi'>".$days."</h1><span class='sp'>DAY TO GO<br></span>";
                                            }
                                            elseif($days == 0) {
                                                echo "<h1 class='hi'>".$days."</h1><span class='sp'>NOW<br></span>";   
                                            }
                                            else{
                                                echo "<h1 class='hi'>".$days."</h1><span class='sp'>DAYS TO GO<br></span>";
                                            }
                                            
                                            ?>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h1 class="bul">
                                    <?php
                                    $start = $events[$i]->start;
                                    $end = $events[$i]->end;
        
                                    $new_start = date('F d', strtotime($start));
                                    $new_end = date('d', strtotime($end));
                                    $year = date('Y', strtotime($end));
                                    echo "$new_start", " ", "-", " ", "$new_end", " ", "$year";
                                ?>
                                </h1>
                                <h1 class="bul">
                                    {{ $events[$i]->event_name }}
                                </h1><br>
                                <span style="color: #fff; font-weight: 800;">
                                    {{ $events[$i]->location }}<br>
                                    Pa. (Benfits the Pittsburgh Food Bank)
                                </span>
                                <p style="margin-top: 1rem;">
                                    <button class="btn" style="margin-right: 80px; border-radius: 20px; background: #02F5FD; color: #fff;"><a style="color: #ffff; text-decoration: none;" href="#">ALL EVENT LIST</a></button>
                                    <button class="btn" style="border-radius: 20px; background: #00CDDB; color: #fff;"><a style="color: #ffff; text-decoration: none;" href="{{ url('form') }}">JOIN THIS EVENT</a></button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
				@endfor
				@for ($i = 1; $i < count($events); $i++)
				<div class="carousel-item">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-4 likod">
								<div class="tri">
										<?php
											
											$current = date('Y-m-d');
											$start = $events[$i]->start;
											$date1 = new Datetime($current);
											$date2 = new Datetime($start);
											$diff = $date2->diff($date1)->format('%a');
											$days = intval($diff);
											
											if($days == 1){ 
												echo "<h1 class='hi'>".$days."</h1><span class='sp'>DAY TO GO<br></span>";
											}
											elseif($days == 0) {
												echo "<h1 class='hi'>".$days."</h1><span class='sp'>NOW<br></span>";   
											}
											else{
												echo "<h1 class='hi'>".$days."</h1><span class='sp'>DAYS TO GO<br></span>";
											}
											
											?>
								</div>
							</div>
							<div class="col-sm-8">
								<h1 class="bul">
									<?php
									$start = $events[$i]->start;
									$end = $events[$i]->end;

									$new_start = date('F d', strtotime($start));
									$new_end = date('d', strtotime($end));
									$year = date('Y', strtotime($end));
									echo "$new_start", " ", "-", " ", "$new_end", " ", "$year";
								?>
								</h1>
								<h1 class="bul">
									{{ $events[$i]->event_name }}
								</h1><br>
								<span style="color: #fff; font-weight: 800;">
										{{ $events[$i]->location }}<br>
									Pa. (Benfits the Pittsburgh Food Bank)
								</span>
								<p style="margin-top: 1rem;">
									<button class="btn" style="margin-right: 80px; border-radius: 20px; background: #02F5FD; color: #fff;"><a style="color: #ffff; text-decoration: none;" href="#">ALL EVENT LIST</a></button>
									<button class="btn" style="border-radius: 20px; background: #00CDDB; color: #fff;"><a style="color: #ffff; text-decoration: none;" href="{{ url('form') }}">JOIN THIS EVENT</a></button>
								</p>
							</div>
						</div>
					</div>
				</div>
				@endfor
            @endif
            
            
          </div>
        </div>
    </div>
</section>
@endsection



@extends('layouts.landing')

@section('content')
 <!-- ----------------------------Section 1------------------------------------ -->

 <div class="sec2 wrapper" style="    padding-top: 185px; padding-bottom: 80px;">
        <div class="container">

            <h1 class="agay">CONTACT FORM</h1>

            <div class="row" style="    text-align: center; padding-bottom: 50px;">
                <div class="col">
                    <span style="font-weight: 800;">
                        Main contact and quote form.
                    </span> 
                </div>
                <div class="col">
                    <span style="font-weight: 800; font-style: italic;">
                        Do not fill this form out if you're a solicitor.
                    </span>
                    
                </div>
            </div>

            <form>
               
            <div class="row">
              <div class="col">
                <input type="text" class="form-control rad" placeholder="First name" required>
              </div>
              <div class="col">
                <input type="text" class="form-control rad" placeholder="Last name" required>
              </div>
            </div>


            <div class="row" style="    padding-top: 25px;">
              <div class="col">
                <input type="text" class="form-control rad" placeholder="Phone" required>
              </div>
              <div class="col">
                <input type="email" class="form-control rad" placeholder="Email" required>
              </div>
            </div>

            <div class="row" style="    padding-top: 25px;">
                <div class="col">
                    <textarea style="height: 7.5em!important;" class="form-control rad" name="message" placeholder="How can we help you?"></textarea>
                </div>
            </div>

            <div class="row" style="    padding-top: 25px;">
                <div class="col">
                    <button class="btn send">
                        SUBMIT
                    </button>
                </div>
            </div>

            </form>
        </div>
    </div>

 <!-- ---------------------------------------------------------------- -->


 <section class="sec3">
    <div class="container caro">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="    height: 245px;">
      <ol class="carousel-indicators" style="bottom: -60px;">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      {{-- <h1>{{ count($events) }}</h1> --}}
      <div class="carousel-inner" style="    height: 270px;">
        @if (count($vendors) == 1)
            @for ($i = 0; $i < count($vendors); $i++)
            <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm-6" style="padding: 0;">
                            <img class="d-block w-100" src="{{ asset('images/stacy.PNG') }}" alt="First slide">
                        </div>
                        <div class="col-sm-6" style="background: #00D0EA; padding-top: 15px;">
                            <h1 style="text-align: center; font-family: 'Montserrat', sans-serif!important; font-weight: 800;">
                                CATCH <span style="text-transform: uppercase">{{ $vendors[0]->vendor_name }}</span> ON:
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
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6" style="padding: 0;">
                                <img class="d-block w-100" src="{{ asset("images/stacy.PNG") }}" alt="First slide">
                            </div>
                            <div class="col-sm-6" style="background: #00D0EA; padding-top: 15px;">
                                <h1 style="text-align: center; font-family: 'Montserrat', sans-serif!important; font-weight: 800;">
                                    CATCH <span style="text-transform: uppercase">{{ $vendors[0]->vendor_name }}</span> ON:
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
                </div>
            @for ($z = 0; $z < 16; $z++) 
            <div class="carousel-item">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6" style="padding: 0;">
                                <img class="d-block w-100" src="{{ asset('images/stacy.PNG') }}" alt="First slide">
                            </div>
                            <div class="col-sm-6" style="background: #00D0EA; padding-top: 15px;">
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
                                <div class="col-sm-4">
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
                                    <h1 class="bul" style="line-height: .2;">
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
                            <div class="col-sm-4">
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
                                <h1 class="bul" style="line-height: .2;">
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
						<div class="col-sm-4">
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
							<h1 class="bul" style="line-height: .2;">
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
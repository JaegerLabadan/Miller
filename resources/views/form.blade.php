@extends('layouts.app')

@section('content')
<script src="https://www.paypalobjects.com/api/checkout.js"></script>



<script>

  paypal.Button.render({
    env: 'production', // Or 'production'
    // Set up the payment:
    // 1. Add a payment callback
    style: {
      size: 'large',
      color: 'gold',
      shape: 'pill',
    },
    payment: function(data, actions) {
      // 2. Make a request to your server
      return actions.request.post('/api/create-payment/', {
        amount: document.getElementById('totalAmount').value
      })
        .then(function(res) {
          // 3. Return res.id from the response
          return res.id;
          console.log(res.id);
          console.log(eve);
          console.log(boo);
        });
    },
    // Execute the payment:
    // 1. Add an onAuthorize callback
    onAuthorize: function(data, actions) {
      // 2. Make a request to your server
      var eve = [];
      var boo = [];
      jQuery("input[name='events[]']").each(function()
          {	
            if(jQuery(this).prop('checked')){
                eve.push($(this).val());

            }
            
          }
      );
      jQuery("input[name='booth[]']").each(function()
          {	
            if(jQuery(this).prop('checked')){
                boo.push($(this).val());
            }
            
          }
      );
      return actions.request.post('/api/execute-payment/', {
        paymentID: data.paymentID,
        payerID:   data.payerID,
        events: eve,
        booths: boo,
        user: document.getElementById('user_id').value
      })
        .then(function(res) {
          // 3. Show the buyer a confirmation message.
          alert("Purchase! Succesful!");
          console.log(res);
        });
    }
  }, '#paypal-button');
</script>
        <script>
           var totalBooth = 0;
           var totalAmount = 0;
           var boothsSelected = [];
           var eventsSelected = [];
           var receiptBooths = [];
            jQuery(document).ready(function (){
               var booths_purchased = $('#booths_purchased').clone();
               var events_selected = $('#events_selected').clone();
               var receipt_booths = $('#receipt_booths').clone();
               
               $("input[name='events[]']").change(function(){
                  // alert('value changed!');
                  var eve = 0;
                  // var name = "";
                  var name = [];
                  $("input[name='events[]']").each(function()
                     {	
                        if($(this).prop('checked')){
                           // eve.push($(this).attr('data-id'));
                           eve = $(this).attr('data-id');
                           name.push($(this).attr('data-name'));
                        }
                        
                     }
                  );
                  // var eve = $(this).prop('checked').val();
                  // var name = $(this).val();
                  console.log(name);
                  console.log(eve);
                  $.ajax({
                     url: "{{ url('getBooths') }}",
                     method: "GET",
                     data: {
                        id: eve
                     },
                     success:function(result){
                        $('#events_selected').replaceWith(events_selected.clone());
                        var counter = 0;
                        var holders = [];
                        console.log(result.length);
                        $.each(result, function(){
                           console.log(result[counter]['event_id']);
                           $('[data-booth="'+result[counter]["event_id"]+'"]').append('<li><input type="checkbox" name="booth[]"data-day="'+result[counter]["day"]+'" data-event="'+result[counter]["event_id"]+'" data-price="'+result[counter]["booth_price"]+'" class="form-check-input booths" data-slot="'+result[counter]["booth_space"]+'" value="'+result[counter]["eb_id"]+'" data-id="'+result[counter]["eb_id"]+'"> '+result[counter]["booth_space"]+' Space <span class="mon">'+result[counter]["booth_specification"]+' - <strong>'+result[counter]["day"]+' '+result[counter]["booth_price"]+'</strong> </span></li>');
                           counter += 1;
                        });
                        // for(var counter = 0; counter < result.length; counter++){
                        //    console.log(result[counter]['event_id']);
                        //    $('[data-booth="'+result[counter]["event_id"]+'"]').append('<input type="checkbox" name="booth[]" data-day="'+result[counter]["day"]+'" data-price="'+result[counter]["booth_price"]+'" class="form-check-input booths" value="'+result[counter]["booth_space"]+'" id=""><label for="" class="form-check-label">'+result[counter]["booth_space"]+'  '+result[counter]["booth_specification"]+' '+result[counter]["day"]+' - <strong>'+result[counter]["booth_price"]+'$</strong></label><br>');
                        //    counter += 1;
                        // }
                        for(var counter = 0; counter < name.length; counter++){
                           $('#events_selected').append('<h6>'+name[counter]+'</h6>');
                        }
                        
                     }
                  });
               });

               $("input[name='events[]']").change(function(){
                var counter = 0;
                var totalamt = 0;
                var totalamtf = 0;
                  $.each($("input[name='events[]']"), function(a,b){
                    if($(this).prop('checked')){
                      counter = counter + 1;
                    }
                  });
                  totalamt = 300*counter;
                  if(counter >= 3 && counter <= 5){
                    totalamtf = totalamt * 0.1;
                    totalamtf = totalamt - totalamtf; 
                    $('#disc').html('$ ' + totalamt * 0.1);
                    $('#totalAmountd').val('$ ' + totalamtf);
                  }
                  if(counter >= 6 && counter <= 12){
                    totalamtf = totalamt * 0.15;
                    totalamtf = totalamt - totalamtf; 
                    $('#disc').html('$ ' +totalamt * 0.15);
                    $('#totalAmountd').val('$ ' + totalamtf);
                  }
                  if(counter >= 13){
                    totalamtf = totalamt * 0.2;
                    totalamtf = totalamt - totalamtf; 
                    $('#disc').html('$ ' +totalamt * 0.2);
                    $('#totalAmountd').val('$ ' + totalamtf);
                  }
                  if(counter == 1 || counter == 2){
                    totalamtf = totalamt;
                    $('#totalAmountd').val('$ ' + totalamtf);
                  }
               });
               

               $(document).on('change', '.booths', function(){
                  $('#booths_purchased').replaceWith(booths_purchased.clone());

                  // alert('booth clicked!');
                  var boothPrices = [];
                  var boothNames = [];
                  var boothDays = [];
                  // var boothName = [];
                  var boothTotal = 0;
                  jQuery("input[name='booth[]']").each(function()
                     {	
                        if($(this).prop('checked')){
                           boothPrices.push($(this).attr('data-price'));
                           boothDays.push($(this).attr('data-day'));
                           boothNames.push($(this).attr('data-slot'));
                              // alert($(this).attr('data-price'));
                        }
                        
                     }
                  );
                  for(var counter = 0; counter < boothPrices.length; counter++){
                     boothTotal += boothPrices[counter] << 0;
                    //  $("#booths_purchased").append('<h5>'+boothNames[counter]+' SPACE '+boothPrices[counter]+'$ DAY '+boothDays[counter]+'</h5>');
                      $('#booths_purchased').append('<div class="row"><div class="col-sm-9 mons"> '+boothNames[counter]+' SPACE '+boothDays[counter]+'</div><div class="col-sm-3 mons">$'+boothPrices[counter]+'</div></div>');
                  }
                  console.log(boothPrices);
                  console.log(boothNames);
                  console.log(boothDays);

                  totalBooth = boothTotal;
                  $('input[name="amount"]').val(totalAmount = totalBooth);
 
               });
               $('#save_attendee').click(function(){
                  $("input[name='events[]']").each(function(){
                     if($(this).prop('checked')){
                        var new_array = {
                          event_id: $(this).attr('data-id')
                        }
                        eventsSelected.push(new_array);
                     }	
                     
                  });
                  $("input[name='booth[]']").each(function(){
                     if($(this).prop('checked')){
                        var new_array = {
                          event_id: $(this).attr('data-event'),
                          booth_id: $(this).attr('data-id'),
                          booth_name: $(this).val(),
                          booth_price: $(this).attr('data-price'),
                          day: $(this).attr('data-day')
                        }
                        boothsSelected.push(new_array);
                     }
                     
                  });
                  $.ajax({
                    url: "{{ url('paypal') }}",
                    method: "post",
                    data: {
                      events: eventsSelected,
                      booths: boothsSelected,
                      amount: $('input[name="totalAmountDue"]').val()
                    },
                    success: function(result){
                      console.log(result);
                    }
                  });	
               });
            });
        </script>
<div class="courses-area mg-b-15" style="padding-top: 70px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="white-box">
                        @if($nature->nature == 'Vendor')
                        <div class="container">
                            <h1 class="heads">EVENT APPLICATION FORM</h1>
                
                            <div class="row" style="padding-top: 20px;">
                              <div class="col">
                                <h5>Choose the Event/s (Click all the applies)</h5>
                              </div>
                            </div>
                
                            <div class="row" style="width: 80%; margin-left: auto; margin-right: auto;">
                              <div class="col">
                                {{-- <form method="POST" action="{{ url('join_events') }}"> --}}
                                <form id="payment-form" method="POST" action="{!! URL::to('paypal') !!}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="" id="user_id" value="{{ $id }}">
                                @foreach($location as $e)
                                  <p>
                                    <h5 class="mon">{{ $e }}</h5>
                                      @foreach($events as $ev)
                                      @if($ev->location == $e)
                                          <input class="" type="checkbox" data-name="{{ $ev->event_name }} {{ $ev->category_of_event }}" value="{{ $ev->event_id }}" data-id="{{ $ev->event_id }}" name="events[]" id="event_holder">
                                          <?php
                                                $start = $ev->start;
                                                $end = $ev->end;

                                                $new_start = date('M d', strtotime($start));
                                                $new_end = date('d', strtotime($end));
                                                $year = date('Y', strtotime($end));
                                                echo "$new_start", "-", "$new_end",",","$year";
                                          ?> <span class="mon"> {{ $ev->event_name }} {{ $ev->category_of_event }}</span> <br>
                                          <ul class="yuel" id="booth_holder" data-booth="{{ $ev->event_id }}">
                                          </ul>
                                        @endif
                                        @endforeach
                                  </p>
                                  @endforeach
              
          
                                  <p>
                                    <h5 class="mon">Your Set-up Schedule</h5>
                                    <input class="rad" type="text" name="setup">
                                  </p>
                
                                  <p>
                                    <h5 class="mon">Table Cloth Rental</h5>
                                    <input class="rad" type="text" name="cloth">
                                  </p>
                
                                  <p class="par" style="font-size: 13px; fonr-weight: 100!important;">
                                    <span class="mon" style="padding-bottom: 5px; font-size: 18px;">Please read and agree to complete your application process.</span><br>
                                    Exhibitor indemnifies and hold harmless merchant and leasing association, mall owners, 
                                    Miller Promotions, any property management group holding the event, Susan Miller,
                                    show managers and all merchants leasing or owning space in said mall, or show, 
                                    their agents and employees from and against any and all liability, claims, thefts, 
                                    demands, expenses, fees and penalties, suits, proceedings, actions, and causes of 
                                    action of any and every kind and nature arising or growing out of or in any way connected 
                                    with Exhibitor's use of occupancy of mall or any Exhibitor's activities in said mall (show)
                                    . Exhibitor acknowledges and agrees to abide by all guidelines, rules, and regulations set 
                                    forth by Miller Promotions, which are found on www.GiftandCraftExpo.com or available by mall, 
                                    as well as set forth by mall owners, for all Miller Promotions shows you participate in. 
                                    Miller Promotions and the mall management reserves the right to refuse space to or remove 
                                    any exhibitor who does not comply with, accept, or cooperate with guidelines as stated in 
                                    Miller Promotions, rules and regulations even if exhibitor has already been accepted into shows.
                                      Miller Promotions and mall management reserves the right to ask an exhibitor to remove and/or change
                                      any item or signage within booth space relative to the levels of professional standards 
                                      set by the mall or Miller Promotions or if a product is in direct competition with another 
                                      in-line store or cart/kiosk at the time of the show, anytime during the show, even if already
                                        accepted in advance. <br><br>
                
                                        I also understand that there are no refunds: Registrations is a
                                        commitment to the show. <br>NO REFUNDS! NO EXCEPTIONS! Once my application with payment has 
                                        been received, no refunds will be honored. This also applies to no shows, late arrivals to 
                                        the show, illness, family circumstances, and any type of request for refund. Spaces cannot
                                        be re-rented without the approval of the show promoter.
                                  </p>
                
                                  <p>
                                    <input type="checkbox" name="" value=""><span> I agree to the terms outlined in this online application.</span> <br>
                                    <input type="checkbox" name="" value="" ><span> I understand that the show promoter, the mall management, and all of its agents are not responsible for lost, stolen, or damaged, merchandise of mine.</span> <br>
                                    <input type="checkbox" name="" value=""><span> I understand that I am responsible for my own insurance and I should provide proof of insurance. Failure to secure insurance will make me liable for any claims or suits held against me by the customer or people attending the event.</span>
                                  </p>
                
                                  <hr class="hrt">
                
                                  <p>
                                    <h5 class="mon">SUMMARY</h5><br>
                                    <div class="hed" style="text-align: center;" id="events_selected">

                                    </div>
                                    <div class="col-sm-12" style="text-align: right;" id="booths_purchased">

                                    </div>
                                    <div class="col-sm-12" style="text-align: right;">
                                      <div class="row">
                                        <div class="col-sm-9 mons">
                                          HAVE A PROMO CODE?
                                        </div>
                                        <div class="col-sm-3 mons">
                                          <input class="rads" type="" name="" placeholder="enter it here">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-12" style="text-align: right;">
                                      <div class="row">
                                        <div class="col-sm-9 mons">
                                          DISCOUNT
                                        </div>
                                        <div class="col-sm-3 mons" id="disc">
                                          $180
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-12" style="text-align: right;">
                                      <div class="row">
                                        <div class="col-sm-9 mons">
                                          TAX
                                        </div>
                                        <div class="col-sm-3 mons">
                                          $180
                                        </div>
                                      </div>
                                    </div>

                                    {{-- <hr class="hrt"> --}}
                
                                    <div class="col-sm-12" style="text-align: right;">
                                      <div class="row">
                                        <div class="col-sm-9">
                                          <span class="mons daks">
                                            TOTAL
                                          </span>
                                        </div>
                                        <div class="col-sm-3">
                                          <span class="mons">
                                            <input class="radi" type="text" id="totalAmount"  name="amount" placeholder="$ 180.50"> 
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </p>
                                  <button type="submit" id="paypal-button" style="float:right;">
                                  </button>
                                </form>
                              </div>
                            </div>
                        </div>
                    </div>
                  @else
                  <div class="container">
                    <h1 class="heads">Commercial Vendor Application</h1>
        
                    <div class="row" style="padding-top: 20px;">
                      <div class="col" style="margin-left: 100px;">
                        <h5>Commercial rate is a flat rate of $300. Price is not adjusted for less participation. </h5>
              
              
                        <p style="font-weight: 700;">
                          We offer a 10% discount when you book 3-5 events. <br>
                          15% discount when you book 6-12 events. <br>
                          20% discount when you book all 13 shows.
                        </p>
          
                        <p>
                          Please check the events you are interested in. The program will charge for one event. If you are doing more than (1) event, we will send you an invoice to the email address in this application, and your invoice will reflect any discounts if applicable.
                        </p>
                      </div>
                    </div>
        
                    <div class="row" style="width: 80%; margin-left: auto; margin-right: auto;">
                      <div class="col">
                        {{-- <form method="POST" action="{{ url('join_events') }}"> --}}
                        <form id="payment-form" method="POST" action="{!! URL::to('paypal') !!}">
                            {{ csrf_field() }}
                            <input type="hidden" name="" id="user_id" value="{{ $id }}">
                        @foreach($location as $e)
                          <p>
                            <h5 class="mon">{{ $e }}</h5>
                              @foreach($events as $ev)
                              @if($ev->location == $e)
                                  <input class="" type="checkbox" data-name="{{ $ev->event_name }} {{ $ev->category_of_event }}" value="{{ $ev->event_id }}" data-id="{{ $ev->event_id }}" name="events[]" id="event_holder" data-price="300">
                                  <?php
                                        $start = $ev->start;
                                        $end = $ev->end;

                                        $new_start = date('M d', strtotime($start));
                                        $new_end = date('d', strtotime($end));
                                        $year = date('Y', strtotime($end));
                                        echo "$new_start", "-", "$new_end",",","$year";
                                  ?> <span class="mon"> {{ $ev->event_name }} {{ $ev->category_of_event }}</span> <br>
                                @endif
                                @endforeach
                          </p>
                          @endforeach
      
                          <p>
                            <strong>Picture waiver. Pictures may be taken at the event. They may include your booth, staff, and/or products. Do you give release to Miller Promotions, to use these pictures for the sole purpose of marketing your company and the event?</strong><br>
                            <input type="radio" name="" value="yes"> Yes<br>
                            <input type="radio" name="" value="no"> No<br>
                          </p>
        
                          <p class="par" style="font-size: 13px; fonr-weight: 100!important;">
                            <span class="mon" style="padding-bottom: 5px; font-size: 18px;">Please read and agree to complete your application process.</span><br>
                            Exhibitor indemnifies and hold harmless merchant and leasing association, mall owners, 
                            Miller Promotions, any property management group holding the event, Susan Miller,
                            show managers and all merchants leasing or owning space in said mall, or show, 
                            their agents and employees from and against any and all liability, claims, thefts, 
                            demands, expenses, fees and penalties, suits, proceedings, actions, and causes of 
                            action of any and every kind and nature arising or growing out of or in any way connected 
                            with Exhibitor's use of occupancy of mall or any Exhibitor's activities in said mall (show)
                            . Exhibitor acknowledges and agrees to abide by all guidelines, rules, and regulations set 
                            forth by Miller Promotions, which are found on www.GiftandCraftExpo.com or available by mall, 
                            as well as set forth by mall owners, for all Miller Promotions shows you participate in. 
                            Miller Promotions and the mall management reserves the right to refuse space to or remove 
                            any exhibitor who does not comply with, accept, or cooperate with guidelines as stated in 
                            Miller Promotions, rules and regulations even if exhibitor has already been accepted into shows.
                              Miller Promotions and mall management reserves the right to ask an exhibitor to remove and/or change
                              any item or signage within booth space relative to the levels of professional standards 
                              set by the mall or Miller Promotions or if a product is in direct competition with another 
                              in-line store or cart/kiosk at the time of the show, anytime during the show, even if already
                                accepted in advance. <br><br>
        
                                I also understand that there are no refunds: Registrations is a
                                commitment to the show. <br>NO REFUNDS! NO EXCEPTIONS! Once my application with payment has 
                                been received, no refunds will be honored. This also applies to no shows, late arrivals to 
                                the show, illness, family circumstances, and any type of request for refund. Spaces cannot
                                be re-rented without the approval of the show promoter.
                          </p>
        
                          <p>
                            <input type="checkbox" name="" value=""><span> I agree to the terms outlined in this online application.</span> <br>
                            <input type="checkbox" name="" value="" ><span> I understand that the show promoter, the mall management, and all of its agents are not responsible for lost, stolen, or damaged, merchandise of mine.</span> <br>
                            <input type="checkbox" name="" value=""><span> I understand that I am responsible for my own insurance and I should provide proof of insurance. Failure to secure insurance will make me liable for any claims or suits held against me by the customer or people attending the event.</span>
                          </p>
        
                          <hr class="hrt">
        
                          <p>
                            <h5 class="mon">SUMMARY</h5><br>
                            <div class="hed" style="text-align: center;" id="events_selected">

                            </div>
                            <div class="col-sm-12" style="text-align: right;" id="booths_purchased">

                            </div>
                            <div class="col-sm-12" style="text-align: right;">
                              <div class="row">
                                <div class="col-sm-9 mons">
                                  HAVE A PROMO CODE?
                                </div>
                                <div class="col-sm-3 mons">
                                  <input class="rads" type="" name="" placeholder="enter it here">
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-12" style="text-align: right;">
                              <div class="row">
                                <div class="col-sm-9 mons">
                                  DISCOUNT
                                </div>
                                <div class="col-sm-3 mons" id="disc">
                                  0
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-12" style="text-align: right;">
                              <div class="row">
                                <div class="col-sm-9 mons">
                                  TAX
                                </div>
                                <div class="col-sm-3 mons">
                                  $180
                                </div>
                              </div>
                            </div>

                            {{-- <hr class="hrt"> --}}
        
                            <div class="col-sm-12" style="text-align: right;">
                              <div class="row">
                                <div class="col-sm-9">
                                  <span class="mons daks">
                                    TOTAL
                                  </span>
                                </div>
                                <div class="col-sm-3">
                                  <span class="mons">
                                    <input class="radi" type="text" id="totalAmountd"  name="amountd" placeholder="$ 0"> 
                                    {{-- <input  type="text" id="totalAmountd"  placeholder="$ 0">  --}}
                                  </span>
                                </div>
                              </div>
                            </div>
                          </p>

                          <button type="submit" id="paypal-button" style="float:right;">
                          </button>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
                  @endif

            </div>
        </div>
    </div>
  </div>
</div>
@endsection
@extends('layouts.app')
@section('content')
    <script>
        $(document).ready(function(){
            //Adds Fields in Space
            $("#add_spaces").click(function(){
                $('#space_holder').append('<div class="col-sm-3 tri" ><input type="text" class="form-control rady" placeholder="Space" name="space[]"></div><div class="col-sm-3 tri"><input type="text" class="form-control rady" placeholder="Number of Space" name="num_of_space[]"></div><div class="col-sm-2 tri"><input type="text" class="form-control rady" placeholder="Price" name="space_price[]"></div><div class="col-sm-2 tri"><input type="text" class="form-control rady" placeholder="Space For"></div>');
            });
            $("#remove_space_all").click(function(){
                alert('clicked!');
                $("#add_space").empty();
                $('#add_number_of_space').empty();
                $('#add_space_price').empty();
            });
    
            //Adds Fields in Discounts
            $("#add_discounts").click(function(){
                $('#discount_holder').append('<div class="col-sm-5 tri" ><input type="text" class="form-control rady" placeholder="Discount" name="discount[]"></div><div class="col-sm-5 tri"><input type="text" class="form-control rady" placeholder="Number of Selected Events" name="num_of_selected_events[]"></div>')
            });

            //Adds Fields in Promo Code
            $("#add_promos").click(function(){
                $('#promo_holder').append('<div class="col-sm-10 tri" ><input type="text" class="form-control rady" placeholder="Code" name="promo_code[]"></div>')
            });
    
            //Save Event
            $('#save_event').click(function(){
                alert("clicked!");
                var data = new FormData(document.getElementById('event_form'));
                $.ajax({
                    url: '{{ url('save_event_info') }}',
                    type: 'POST',
                    data: data,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success:function(result){
                        console.log(result);
                    }
                });
            });
        });
    </script>
       <div class="courses-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Create an Event</h3>
                            <div class="tabi">                      
                            <form method="POST" action="{{ url('event_store') }}" enctype="multipart/form-data">
                                @csrf
                                    <div class="row">
                                        <div class="col">
                                            <select class="form-control rady" name="type_of_event" id="">
                                                <option value="Gift and Crafts Expo" selected disabled>Event Category</option>
                                                <option value="Gift and Crafts Expo">Gifts and Crafts Expo</option>
                                                <option value="Pamperfest">Pamperfest</option>
                                                <option value="Healthy Preventions Expo">Healthy Preventions Expo</option>
                                                <option value="Black &amp; Gold Expo">Black &amp; Gold Expo</option>
                                                <option value="Food Truck Festival">Food Truck Festival</option>
                                                <option value="Womens Clothing bonanza">Women's Clothing Bonanza</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row" style="columns: 2;    padding-top: 25px;">
                                      <div class="col" >
                                        <input type="text" class="form-control rady"  placeholder="Event Name" name="event_name">
                                      </div>
                                      <div class="col">
                                        <input type="text" class="form-control rady" placeholder="Location" name="location">
                                      </div>
                                    </div>

                                    <div class="row" style="columns: 2;    padding-top: 25px;">
                                      <div class="col" >
                                        <input name="start_of_event" placeholder="Start of Event" class="form-control rady" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" >
                                      </div>
                                      <div class="col">
                                        <input name="end_of_event" placeholder="End of Event" class="form-control rady" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" >
                                      </div>
                                    </div>

                                    <div class="col-sm-12" style="padding-right: 0; padding-left: 0; padding-top: 25px;">
                                        <h3 style="font-size: 22px; color: #444;">Booths</h3>
                                        <div class="row" id="space_holder">
                                          <div class="col-sm-3 tri" >
                                            <input type="text" class="form-control rady" placeholder="Space" name="space[]">
                                          </div>
                                          <div class="col-sm-3 tri">
                                            <input type="text" class="form-control rady" placeholder="Number of Space" name="num_of_space[]">
                                          </div>
                                          <div class="col-sm-2 tri">
                                            <input type="text" class="form-control rady" placeholder="Price" name="space_price[]">
                                          </div>
                                          <div class="col-sm-2 tri">
                                            <input type="text" class="form-control rady" placeholder="Space For">
                                          </div>
                                          <div class="col-sm-2 tri">
                                            <button type="button" class="form-control rady radish" id="add_spaces"><i class="fa fa-plus-square"></i> Add</button>
                                          </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12" style="padding-right: 0; padding-left: 0; padding-top: 25px;">
                                        <h3 style=" font-size: 22px; color: #444;">Discounts</h3>
                                        <div class="row" id="discount_holder">
                                          <div class="col-sm-5 tri" >
                                            <input type="text" class="form-control rady" placeholder="Discount" name="discount[]">
                                          </div>
                                          <div class="col-sm-5 tri">
                                            <input type="text" class="form-control rady" placeholder="Number of Selected Events" name="num_of_selected_events[]">
                                          </div>
                                          <div class="col-sm-2 tri">
                                            <button type="button" class="form-control rady radish" id="add_discounts"><i class="fa fa-plus-square"></i> Add</button>
                                          </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12" style="padding-right: 0; padding-left: 0; padding-top: 25px;">
                                        <h3 style=" font-size: 22px; color: #444;">Promo Code</h3>
                                        <div class="row" id="promo_holder">
                                          <div class="col-sm-10 tri" >
                                            <input type="text" class="form-control rady" placeholder="Code" name="promo_code[]">
                                          </div>
                                          <div class="col-sm-2 tri">
                                            <button type="button" class="form-control rady radish" id="add_promos"><i class="fa fa-plus-square"></i> Add</button>
                                          </div>
                                        </div>
                                    </div>

                                   <div class="col-sm-12" style="padding-right: 0; padding-bottom: 25px; padding-left: 0; padding-top: 25px;">
                                        <h3 style=" font-size: 22px; color: #444;">Event Banner/Logo</h3>
                                        <div class="row">
                                            <div class="col-sm-5 tri">
                                                <input class="form-control rady lam" type="file" name="event_banner" accept="image/*">
                                            </div>        
                                          
                                        </div>
                                    </div>
                                    

                                    <div class="row" style="padding-top: 25px;">
                                        <div class="col">
                                            <button type="submit" class="form-control radishes rady"><i class="fa fa-check-square"></i> Create Event</button>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
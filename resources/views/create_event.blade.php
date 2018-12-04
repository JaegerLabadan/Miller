@extends('layouts.app')
@section('content')
    <script>
        $(document).ready(function(){
            //Adds Fields in Space
            $("#add_spaces").click(function(){
                $('#space_holder').append('<div class="row" style="margin: 0; margin-top: 2px"><input type="text" class="form-control col-sm-4" name="space[]" placeholder="Type of Space"/><input type="text" class="form-control col-sm-2" name="num_of_space[]" placeholder="Number of Spaces"/><input type="text" class="form-control col-sm-2" name="space_price[]" placeholder="Price"/><input type="text" class="form-control col-sm-3" name="space_spec[]" placeholder="Space For" /><button type="button" class="btn btn-danger col-sm-1" id="add_space"><span data-feather="x-square"></span>X</button> </div>');
            });
            $("#remove_space_all").click(function(){
                alert('clicked!');
                $("#add_space").empty();
                $('#add_number_of_space').empty();
                $('#add_space_price').empty();
            });
    
            //Adds Fields in Discounts
            $("#add_discounts").click(function(){
                $('#discount_holder').append('<div class="row" style="margin: 0; margin-top: 2px;"><input type="text" class="form-control col-sm-5" name="discount[]" placeholder="Discount"/><input type="text" class="form-control col-sm-6" name="num_of_selected_events[]" placeholder="Number of selected events"/><button type="button" class="btn btn-danger col-sm-1" id="add_discounts"><span data-feather="plus-square"></span>X</button></div>')
            });

            //Adds Fields in Promo Code
            $("#add_promos").click(function(){
                $('#promo_holder').append('<div class="row" style="margin: 0;"><input type="text" class="form-control col-sm-11" name="promo_code[]"><button type="button" class="btn btn-danger col-sm-1" id="add_promos"><span data-feather="plus-square"></span>X</button></div>')
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
                    <h2>Create an Event</h2>
                    <form method="POST" action="{{ url('event_store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Category of Event</label>
                            <div class="col-sm-10">
                                <select name="type_of_event" id="">
                                    <option value="Gift and Crafts Expo">Gifts and Crafts Expo</option>
                                    <option value="Pamperfest">Pamperfest</option>
                                    <option value="Healthy Preventions Expo">Healthy Preventions Expo</option>
                                    <option value="Black & Gold Expo">Black & Gold Expo</option>
                                    <option value="Food Truck Festival">Food Truck Festival</option>
                                    <option value="Womens Clothing bonanza">Women's Clothing Bonanza</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Event Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="event_name" placeholder="Event Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Location</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="location" placeholder="Location">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Start of Event</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="start_of_event">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">End of Event</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="end_of_event">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Booths</label>
                            <div class="col-sm-10" id="space_holder">
                                <div class="row" style="margin: 0;">
                                    <input type="text" class="form-control col-sm-4" name="space[]" placeholder="Type of Space"/>
                                    <input type="text" class="form-control col-sm-2" name="num_of_space[]" placeholder="Number of Spaces"/>
                                    <input type="text" class="form-control col-sm-2" name="space_price[]" placeholder="Price"/>
                                    <input type="text" class="form-control col-sm-3" name="space_spec[]" placeholder="Space For" />
                                    <button type="button" class="btn btn-success col-sm-1" id="add_spaces"><span data-feather="plus-square">+</span></button> 
                                </div>
                            </div>
                            <label for="" class="col-sm-2 col-form-label">Discounts</label>
                            <div class="col-sm-10" id="discount_holder">
                                <div class="row" style="margin: 0; margin-top: 2px;">
                                    <input type="text" class="form-control col-sm-5" name="discount[]" placeholder="Discount"/>
                                    <input type="number" class="form-control col-sm-6" name="num_of_selected_events[]" placeholder="Number of selected events"/>
                                    <button type="button" class="btn btn-success col-sm-1" id="add_discounts"><span data-feather="plus-square">+</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Promo Code</label>
                            <div class="col-sm-10" id="promo_holder">
                                <div class="row" style="margin: 0;">
                                    <input type="text" class="form-control col-sm-11" name="promo_code[]">
                                    <button type="button" class="btn btn-success col-sm-1" id="add_promos"><span data-feather="plus-square">+</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Event Banner</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="event_banner">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary"><span data-feather="check-square"></span> Create Event</button>
                            </div>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection
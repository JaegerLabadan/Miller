@extends('layouts.app')

@section('content')
<script>
     jQuery(document).ready(function (){
        $('#event').change(function(){
            var event = $(this).val();
            $.ajax({
                url: "{{ url('getBooths') }}",
                method: "GET",
                data : {
                    id: event
                },
                success: function(result){
                    var counter = 0;
                    $.each(result, function(){
                        $('#slots').append('<li><input type="checkbox" name="booth[]"data-day="'+result[counter]["day"]+'" data-event="'+result[counter]["event_id"]+'" data-price="'+result[counter]["booth_price"]+'" class="form-check-input booths" value="'+result[counter]["booth_space"]+'" data-id="'+result[counter]["eb_id"]+'"> '+result[counter]["booth_space"]+' Space <span class="mon">'+result[counter]["booth_specification"]+' - <strong>'+result[counter]["day"]+' '+result[counter]["booth_price"]+'</strong> </span></li>');
                        counter += 1;
                    });
                }
            });
        });
     });
</script>
        <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Add Event for Vendor</h4>
                </div>
                <form method="POST" action="{{ url('manual_add') }}">
                    @csrf
                <div class="modal-body">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <select class="form-control rady"  name="event_id" id="event">
                                    @foreach($events as $e)
                                        <option value="{{ $e->event_id }}">{{ $e->event_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control rady" name="company_name" placeholder="Company/Vendor Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12" style="padding-top: 10px;">
                            {{-- <input placeholder="Date" class="form-control rady" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" > --}}
                        <select class="form-control rady" name="product_specification" id="">
                            <option value="" disabled selected>Products/Services Specialty</option>  
                            <option value="Commercial Products">Commercial Products</option>
                            <option value="Commercial Services">Commercial Services</option>
                            <option value="Music/Band">Music/Band</option>
                            <option value="Handmade products">Handmade products</option>
                            <option value="Import">Import</option>
                            <option value="Direct Re-selling">Direct Re-selling</option>
                        </select>
                    </div>

                    <div class="col-sm-12" style="padding-top: 10px;">
                        <label>Slots</label>

                        <ul class="yul" id="slots">
                            
                        </ul>
                    </div>

                    <div class="col-sm-12" style="padding-top: 10px;">
                        <div class="col">
                            <button type="submit" class="form-control radishes rady" id="manual_add"><i class="fa fa-check-square"></i> Save</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" >
                  <button type="button" style="margin-top: 10px;" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </form>
              </div>
              
            </div>
          </div>
        
        <div class="courses-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Vendor List by Events</h3>

                            <div class="col-sm-12" style="padding-right: 0; padding-left: 0; padding-bottom: 25px; padding-top: 25px;">
                                <!-- <button class="form-control rady radishes"><i class="fa fa-check-square"></i> Create Event</button> -->
                                <button type="button" style="width: 40%;" class="btn btn-lg form-control rady radishes" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square"></i> Add Vendor</button>
                            </div>

                            <div class="tabi">                      
                              <table class="table table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th>Event Name</th>
                                    <th>Company Name</th>
                                    <th>Product Specification</th>
                                    <th>Start</th>
                                    <th>End</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($vendor as $v)
                                  <tr>
                                    <td>{{ $v->event_name }}</td>
                                    <td>{{ $v->company_name }}</td>
                                    <td>{{ $v->product_specification }}</td>
                                    <td>{{ $v->start }}</td>
                                    <td>{{ $v->end }}</td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>

@endsection

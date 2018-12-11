@extends('layouts.app')
@section('content')
<div class="courses-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="white-box">
                    {{-- <h3 class="box-title">View 1</h3> --}}
                    <div class="tabi">                      
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                            <img class="imij" src="{{ asset('storage/app/public/logos/'. $credentials->company_logo) }}" alt="Company Logo" height="300" width="300" style="border-radius: 50%;" >
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            <div class="his">
                                <!-- <input type="text" class="form-control rady" placeholder="Company Name"> -->
                                <label for="comp_name">Company Name</label>
                                <h4 class="form-control bords"> {{ $credentials->company_name }} </h4>
                            </div>
                            <div class="his">
                                <!-- <input type="text" class="form-control rady" placeholder="Vendor Name"> -->
                                <label for="comp_name">Vendor Name</label>
                                <h4 class="form-control bords"> {{ $credentials->vendor_name }} </h4>
                            </div>
                            <div class="his" style="columns: 2">
                                <!-- <input type="text" class="form-control rady" placeholder="Phone"> -->
                                <label for="comp_name">First Name</label>
                                <h4 class="form-control bords">{{ $credentials->firstname }}</h4>
                                <label for="comp_name">Last Name</label>
                                <h4 class="form-control bords">{{ $credentials->lastname }}</h4>
                                <!-- <input type="text" class="form-control rady" placeholder="Fax"> -->
                            </div>
                            <div class="his" style="columns: 2">
                                <!-- <input type="text" class="form-control rady" placeholder="Phone"> -->
                                <label for="comp_name">Phone</label>
                                <h4 class="form-control bords">{{ $credentials->phone }}</h4>
                                <label for="comp_name">Fax</label>
                                <h4 class="form-control bords">{{ $credentials->fax }}</h4>
                                <!-- <input type="text" class="form-control rady" placeholder="Fax"> -->
                            </div>
                            <div class="his">
                                <!-- <input type="email" class="form-control rady" placeholder="Email"> -->
                                <label for="comp_name">Email</label>
                                <h4 class="form-control bords">{{ $credentials->email }}</h4>
                            </div>
                            <div class="his">
                                <!-- <input placeholder="Date Joined" class="form-control rady" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" > -->
                                <label for="comp_name">Date Joined</label>
                                <h4 class="form-control bords">{{ $credentials->created_at }}</h4>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="his">
                                <!-- <input type="text" class="form-control rady" placeholder="Event Name"> -->
                                <label for="comp_name">Event Name</label>
                                <h4 class="form-control bords">{{ $eventname }}</h4>
                            </div>

                            <div class="his">
                                <h4 class="form-control bords"> Booths </h4>
                            </div>

                            <div class="his">
                                <table class="table table-bordered table-hover">
                                  <thead>
                                    <tr>
                                      <th>BOOTH</th>
                                      <th>PRICE</th>
                                      <th>DAY</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($details as $d)
                                    <tr>
                                      
                                      <td>{{ $d->booths }}</td>
                                      <td>{{ $d->price }}</td>
                                      <td>{{ $d->day }}</td>
                                      
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
    </div>
</div>
@endsection
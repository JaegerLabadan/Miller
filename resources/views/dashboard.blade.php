
@extends('layouts.app')

@section('content')
<div class="courses-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="float: right;">
                <div class="white-box">
                      <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                        <th>Name of Event</th>
                        <th>Location</th>
                        <th>Start</th>
                        <th>End</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($position == 'admin') 
                        @foreach($events as $e)
                        <tr>
                            <td>{{ $e->event_name }}</td>
                            <td>{{ $e->location }}</td>
                            <td>{{ $e->start }}</td>
                            <td>{{ $e->end }}</td>
                        </tr>
                        @endforeach
                        @else
                        @foreach($events as $e)
                        <tr>
                        <td>{{ $e->event_name }}</td>
                        <td>{{ $e->location }}</td>
                        <td>{{ $e->start }}</td>
                        <td>{{ $e->end }}</td>
                        </tr>
                        @endforeach
                        @endif

                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


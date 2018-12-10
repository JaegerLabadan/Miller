<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//Model;
use App\UsersModel;
use App\EventsModel;
use App\EventBoothsModel;
use App\VendorListByEventsModel;
use App\VendorListAlltimeModel;
use App\AttendeesModel;


class FormController extends Controller
{
    public function index(Request $request){
        $user = $request->session()->get('user');
        $user_id = $request->session()->get('id');
        $pos = $request->session()->get('position');
        $nature = UsersModel::where('user_id', $user_id)->first();
        $credentials = UsersModel::where('user_id', $user_id)->first();
        $events = EventsModel::all();
        $location = DB::table('events_tbl')
                 ->select('location')
                 ->groupBy('location')
                 ->pluck('location')
                 ->all();
        $events = EventsModel::all();

        return view('form')->with([
            'user'=> $user,
            'id' => $user_id,
            'nature' => $nature,
            'position' => $pos,
            'events' => $events,
            'location' => $location,
            'credentials' => $credentials
            // 'location' => $location
        ]);
        // return $nature->nature;
        // return view('vendor')->with('id', $location);
    }

    public function getBoothSpaces(Request $request){

        $id = $request->get('id');
        // for($counter = 0; $counter < count($id); $counter++){
        //     $booth = EventBoothsModel::where('event_id', $id[$counter])->get();
        //     return $booth;         
        // }
        $booth = EventBoothsModel::where('event_id', $id)->get();
        return $booth;
    }

    public function saveAttendee(Request $request){

        $id = $request->session()->get('id');
        $credentials = UsersModel::where('user_id', $id)->first();
        $check = VendorListAlltimeModel::where('user_id', $id)->first();
        $events = $request->events;
        $booths = $request->booths;
        for($counter = 0; $counter < count($events); $counter++){
            for($inner = 0; $inner < count($booths); $inner++ ){
                if($events[$counter]['event_id'] == $booths[$inner]['event_id']){
                    $attendee = new AttendeesModel;
                    $attendee->event_id = $events[$counter]['event_id'];
                    $attendee->user_id = $id;
                    $attendee->company_name = $credentials->company_name;
                    $attendee->booths = $booths[$inner]['booth_name'];
                    $attendee->day = $booths[$inner]['day'];
                    $attendee->price = $booths[$inner]['booth_price'];
                    $attendee->totalAmountDue = $request->get('totalAmountDue');
                    $attendee->save();
                }


            }
            $ev_credentials = EventsModel::where('event_id', $events[$counter]['event_id'])->first();
            $vendor = new VendorListByEventsModel;
            $vendor->event_id = $events[$counter]['event_id'];
            $vendor->event_name = $ev_credentials->event_name;
            $vendor->company_name = $credentials->company_name;
            $vendor->product_specification = $credentials->product_specification;
            $vendor->start = $ev_credentials->start;
            $vendor->end = $ev_credentials->end;
            $vendor->save();

        }

    

        return redirect()->route('form');

    }
}

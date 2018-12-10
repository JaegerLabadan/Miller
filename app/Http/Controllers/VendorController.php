<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Model;
use App\UsersModel;
use App\EventsModel;
use App\EventBoothsModel;
use App\VendorListByEventsModel;
use App\AttendeesModel;

class VendorController extends Controller
{
    public function index(Request $request){
        $user = $request->session()->get('user');
        $id = $request->session()->get('id');
        $position = $request->session()->get('position');
        $vendor = VendorListByEventsModel::all();
        // $events = EventsModel::all();
        $events = EventsModel::whereDate('start', '>=', $current)->orderBy('start', 'DESC')->get();
        // $event = EventsModel::where('event_id', $) 

        return view('vendor')->with([
            'user'=> $user,
            'id' => $id,
            'position' => $position,
            'vendor' => $vendor,
            'events' => $events
        ]);
    }

    public function vendor_add(Request $request){

        $validation = $request->validate([
            'event_id' => 'required',
            'companyname' => 'required',
            'vendorname' => 'required',
            'product_specification' => 'required',
            'booth' => 'required',
        ]);

        $id = $request->get('event_id');
        $credentials = EventsModel::where('event_id', $id)->first();
        $booths = $request->booth;
        
        $vendor = new VendorListByEventsModel;
        $vendor->event_id = $id;
        $vendor->event_name = $credentials->event_name;
        $vendor->company_name = $request->get('companyname');
        $vendor->vendor_name = $request->get('vendorname');
        $vendor->product_specification = $request->get('product_specification');
        $vendor->start = $credentials->start;
        $vendor->end = $credentials->end;
        $vendor->save();

        for($counter = 0; $counter < count($booths); $counter++){
            $boothes = EventBoothsModel::where('eb_id', $booths[$counter])->first();
            $attendee = new AttendeesModel;
            $attendee->event_id = $id;
            $attendee->company_name = $request->get('companyname');
            $attendee->booths = $boothes->booth_space;
            $attendee->day = $boothes->day;
            $attendee->price = $boothes->booth_price;
            $attendee->save();
        }


        return redirect()->route('vendors');
    }

}

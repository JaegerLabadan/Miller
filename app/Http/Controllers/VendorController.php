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
        $events = EventsModel::all();
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

        $id = $request->get('event_id');
        $credentials = EventsModel::where('event_id', $id)->first();
        
        $vendor = new VendorListByEventsModel;
        $vendor->event_id = $request->get('event_id');
        $vendor->event_name = $credentials->event_name;
        $vendor->company_name = $request->get('company_name');
        $vendor->start = $credentials->start;
        $vendor->end = $credentials->end;
        $vendor->save();
    }

}

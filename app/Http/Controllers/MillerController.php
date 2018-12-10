<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//Models
use App\EventsModel;
use App\VendorListByEventsModel;

class MillerController extends Controller
{
    public function index(Request $request){
        $current = date('Y-m-d');
        $user = $request->session()->get('user');
        $id = $request->session()->get('id');
        $position = $request->session()->get('position');
        $events = EventsModel::whereDate('start', '>=', $current)->orderBy('start', 'DESC')->take(3)->get();
        // $vendors = VendorListByEventsModel::whereDate('start', '>=', $current)->orderBy('start', 'DESC')->get();
        $vendors = DB::table('events_tbl')
                        ->join('vendor_list_events_tbl as te', 'events_tbl.event_id', '=', 'te.event_id' )
                        ->get();
        return view('miller')->with([
            'events' => $events,
            'vendors' => $vendors,
            'user'=> $user,
            'id' => $id,
            'position' => $position
        ]);

    }

    public function setup(Request $request){
        $current = date('Y-m-d');
        $user = $request->session()->get('user');
        $id = $request->session()->get('id');
        $position = $request->session()->get('position');
        $events = EventsModel::whereDate('start', '>=', $current)->orderBy('start', 'DESC')->take(3)->get();
        // $vendors = VendorListByEventsModel::whereDate('start', '>=', $current)->orderBy('start', 'DESC')->get();
        $vendors = DB::table('events_tbl')
                        ->join('vendor_list_events_tbl as te', 'events_tbl.event_id', '=', 'te.event_id' )
                        ->get();
        return view('setup')->with([
            'events' => $events,
            'vendors' => $vendors,
            'user'=> $user,
            'id' => $id,
            'position' => $position
        ]);

    }

    public function contact(Request $request){
        $current = date('Y-m-d');
        $user = $request->session()->get('user');
        $id = $request->session()->get('id');
        $position = $request->session()->get('position');
        $events = EventsModel::whereDate('start', '>=', $current)->orderBy('start', 'DESC')->take(3)->get();
        // $vendors = VendorListByEventsModel::whereDate('start', '>=', $current)->orderBy('start', 'DESC')->get();
        $vendors = DB::table('events_tbl')
                        ->join('vendor_list_events_tbl as te', 'events_tbl.event_id', '=', 'te.event_id' )
                        ->get();
        return view('contact')->with([
            'events' => $events,
            'vendors' => $vendors,
            'user'=> $user,
            'id' => $id,
            'position' => $position
        ]);

    }

    public function testimonials(Request $request){
        $current = date('Y-m-d');
        $user = $request->session()->get('user');
        $id = $request->session()->get('id');
        $position = $request->session()->get('position');
        $events = EventsModel::whereDate('start', '>=', $current)->orderBy('start', 'DESC')->take(3)->get();
        // $vendors = VendorListByEventsModel::whereDate('start', '>=', $current)->orderBy('start', 'DESC')->get();
        $vendors = DB::table('events_tbl')
                        ->join('vendor_list_events_tbl as te', 'events_tbl.event_id', '=', 'te.event_id' )
                        ->get();
                        
        return view('testimonials')->with([
            'events' => $events,
            'vendors' => $vendors,
            'user'=> $user,
            'id' => $id,
            'position' => $position
        ]);

    }

}

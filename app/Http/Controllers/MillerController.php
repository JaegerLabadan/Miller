<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Models
use App\EventsModel;

class MillerController extends Controller
{
    public function index(){
        $current = date('Y-m-d');
        $events = EventsModel::whereDate('start', '>=', $current)->orderBy('start', 'DESC')->take(3)->get();
        return view('miller')->with('events', $events);
        // return $events;

    }

}

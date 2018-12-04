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

    public function setup(Request $request){
        $user = $request->session()->get('user');
        $id = $request->session()->get('id');
        $position = $request->session()->get('position');
        return view('setup')->with([
            'user'=> $user,
            'id' => $id,
            'position' => $position
        ]);
    }

    public function contact(Request $request){
        $user = $request->session()->get('user');
        $id = $request->session()->get('id');
        $position = $request->session()->get('position');
        return view('contact')->with([
            'user'=> $user,
            'id' => $id,
            'position' => $position
        ]);
    }

    public function testimonials(Request $request){
        $user = $request->session()->get('user');
        $id = $request->session()->get('id');
        $position = $request->session()->get('position');
        return view('testimonials')->with([
            'user'=> $user,
            'id' => $id,
            'position' => $position
        ]);
    }

}

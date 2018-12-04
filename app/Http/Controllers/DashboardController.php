<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

//Models
use App\EventsModel;

class DashboardController extends Controller
{
    public function index(Request $request){
        $user = $request->session()->get('user');
        $id = $request->session()->get('id');
        $pos = $request->session()->get('position');

        if(count($user) == 0){
            return redirect()->route('login');
        }
        else{
            $events = EventsModel::orderBy('created_at', 'DESC')->get();
            return view('dashboard')->with([
                'user'=> $user,
                'events' => $events,
                'id' => $id,
                'position' => $pos
            ]);
        }
        // $events = EventsModel::all()->sortByDesc('created_at');

    }
    
    public function delete(Request $request){
        
        $msg = 'Record Deleted!';

        $toBeDeleted = $request->get('event_id');
        $event = EventsModel::find($toBeDeleted);
        $event->delete();

        return redirect()->route('dashboard')->with('errors', $msg);
    }



}

<?php

namespace App\Http\Controllers;

//Core Imports
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

//PHP Imports;
use DatePeriod;
use DateTime;
use DateInterval;

//Models
use App\EventsModel;
use App\EventBoothsModel;
use App\EventDiscountsModel;

class EventController extends Controller
{
    //Publish Event Tab
    public function index(Request $request){
        $user = $request->session()->get('user');
        $id = $request->session()->get('id');
        $position = $request->session()->get('position');
        return view('create_event')->with([
            'user'=> $user,
            'id' => $id,
            'position' => $position
        ]);
    }

    
    public function storeEvent(Request $request){
        
        $record = 'Record Added!';
        
        $promo_codes = $request->promo_code;

        $event = new EventsModel;
        $event->category_of_event = $request->type_of_event;
        $event->event_name = $request->event_name;
        $event->location = $request->location;
        $event->start = $request->start_of_event;
        $event->end = $request->end_of_event;

        if($request->hasFile('event_banner')){
            $filenameWithExt = $request->file('event_banner')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('event_banner')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
            
            $path = $request->file('event_banner')->storeAs('public/event_banner', $filenameToStore); 
            $event->event_banner = $filenameToStore;
        }
        $event->promo_codes = implode(',', $promo_codes);
        $event->save();

        //Creates the time Period
        $dates = [];
        $period = new DatePeriod(new DateTime($event->start), new DateInterval('P1D'), new DateTime($event->end . '+ 1 day' ));
        foreach ($period as $date) {
            $dates[] = $date->format("D");
        }

        //Booths 
        $space = $request->space;
        $num_of_space = $request->num_of_space;
        $space_price = $request->space_price;
        $space_spec = $request->space_spec;

        for($counter = 0; $counter < count($space); $counter++){
            for($inner = 0; $inner < count($dates); $inner++){
                $event_booth = new EventBoothsModel;
                $event_booth->event_id = $event->event_id;
                $event_booth->booth_space = $space[$counter];
                $event_booth->booth_count = $num_of_space[$counter];
                $event_booth->booth_price = $space_price[$counter];
                $event_booth->booth_specification = $space_spec[$counter];
                $event_booth->day = $dates[$inner];
                $event_booth->save();
            }
        }

        //Discounts
        $discount = $request->discount;
        $discount_count = $request->num_of_selected_events;

        for($counter = 0; $counter < count($discount); $counter++){
            $event_disc = new EventDiscountsModel;
            $event_disc->event_id = $event->event_id;
            $event_disc->discount = $discount[$counter];
            $event_disc->discount_count = $discount_count[$counter];
            $event_disc->save();
        }


        return redirect()->route('dashboard')->with('errors', $record);


    }
}

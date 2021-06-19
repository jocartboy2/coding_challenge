<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class CalendarController extends Controller
{
    public function get()
    { 
        return view('calendar');
    }

    public function store(Request $req)
    {    
        $days = [];

        if($req->monday)
            array_push($days, $req->monday);
        
        if($req->tuesday)
            array_push($days, $req->tuesday);

        if($req->wednesday)
            array_push($days, $req->wednesday);

        if($req->thursday)
            array_push($days, $req->thursday);

        if($req->friday)
            array_push($days, $req->friday);

        if($req->saturday)
            array_push($days, $req->saturday);

        if($req->sunday)
            array_push($days, $req->sunday);
        
        $days = json_encode($days);
        $events = Event::create([
            'event' => $req->event,
            'from' => $req->datepickerfrom,
            'to' => $req->datepickerto,
            'days' => $days
        ]);

        return $events; 
    }

}

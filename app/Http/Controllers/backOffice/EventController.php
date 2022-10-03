<?php

namespace App\Http\Controllers\backOffice;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index()
    {
        $events = Event::all();
        return view ('backOffice.event.show')->with('events', $events);
    }
 
    
    public function create()
    {
        return view('event.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Event::create($input);
        return redirect('event')->with('flash_message', 'Event Addedd!');  
    }
 
    
    public function show($id)
    {
        $events = Event::find($id);
        return view('event.show')->with('events', $events);
    }

}

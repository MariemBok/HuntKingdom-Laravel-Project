<?php

namespace App\Http\Controllers\backOffice;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventController extends Controller
{
    //
    public function index()
    {
        $events = Event::all();
        if ($events) {
            return view('backOffice.event.show')->with('events', $events);
        }

        return view('backOffice.event.show')->with('events', []);
    }

    public function getEventById($id)
    {
        $event = Event::find($id);
        if (!$event) {
            $events = Event::all();

            return view('backOffice.event.show')->with('events', $events);
        }

        return view('backOffice.event.event')->with('event', $event);
    }

    public function create()
    {
        return view('backOffice.event.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->file('picture')) {
            $file = $request->file('picture');
            $filename = $file->getClientOriginalName();

            $picture = date('His') . '-' . $filename;
            $input['picture'] = 'images/events/' . $picture;

            //move image to public/img folder
            $file->move(public_path('images/events'), $picture);
        }

        // if ($request->file('picture')) {
        //     $filename =
        //         time() . $request->file('picture')->getClientOriginalName();
        //     $input['picture'] = $filename;
        //     $request->file('picture')->store('/images', $filename);
        // }

        //move image to public/img folder
        $dateTime = Carbon::parse($request->startDate);

        $request['startDate'] = $dateTime->format('Y-m-d H:i:s');
        Event::create($input);
        return redirect('back/events')->with('flash_message', 'Event Addedd!');
    }
}

<?php

namespace App\Http\Controllers\frontOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Participation;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        if ($events) {
            return view('frontOffice.events')->with('events', $events);
        }

        return view('frontOffice.events')->with('events', []);
    }
    public function participate($id)
    {
        $idUser = '1';
        $event = Event::find($id);
        if ($event) {
            $participation['event'] = $id;
            $participation['participant'] = $idUser;
            $participations = Participation::where('event', $id)
                ->get()
                ->count();

            $participationsOccurence = Participation::where('event', $id)
                ->where('participant', $idUser)
                ->get()
                ->count();
            if (
                $participations < $event->nbrMax &&
                $participationsOccurence == 0
            ) {
                Participation::create($participation);
            }
            $events = Event::all();
        }
        $events = Event::all();

        return view('frontOffice.events')->with('events', $events);
    }
}

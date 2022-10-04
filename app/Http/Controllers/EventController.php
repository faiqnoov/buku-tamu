<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        return view('guest.event-list', [
            'events' => Event::all()
        ]);
    }

    public function show(Event $event)
    {
        return view('guest.form', [
            'event' => $event
        ]);
    }
}

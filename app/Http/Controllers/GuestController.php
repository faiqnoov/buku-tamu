<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function create(Event $event)
    {
        return view('guest.form', [
            'event' => $event
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'instansi' => 'required',
            'jabatan' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
        ]);

        $validatedData['event_id'] = $request->event_id;

        Guest::create($validatedData);

        return redirect()->route('form', ['event' => $request->event_id])
            ->with('success', 'Data kehadiran Anda telah tercatat.');
    }

    public function delete(Event $event, Guest $guest)
    {
        Guest::destroy($guest->id);
        return redirect()->route('event', ['event' => $event->id])
            ->with('success', 'Tamu telah dihapus dari daftar hadir!');
    }
}

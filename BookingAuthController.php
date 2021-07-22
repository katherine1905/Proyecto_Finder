<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;


class BookingAuthController extends Controller
{

    public function index()
    {
        return view('events');
    }


    public function create(array $data)
    {
        return Booking::create([
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'qkids' => $data['qkids'],
            'qadults' => $data['qadults'],
            'total' => $data['total'],
        ]);
    }

    
    public function store(Request $request)
    {

        $request->validate([
            'events_id'  => 'required',
            'fullname' => 'required',
            'email'  => 'required',
            'qkids'  => 'required',
            'qadults'  => 'required',
            'total'  => 'required'
        ]);

        $data = $request->all();
        Booking::create($data);

        $event = Event::find($request->events_id);
        return view('recibo', compact('data', 'event'));

    }
}

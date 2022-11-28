<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Seat;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Rules\DisposableEmail;
use App\Rules\BadWord;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Booking::all();
        return view('booking', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['seats'] = Seat::get(["id", "price"]);
        $data['events'] = Event::get(["id", "title"]);
        return view('create_booking', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname'      => 'required',
            'email'         => 'required|email|unique:booking',
            'email'         => ['required', new DisposableEmail],
            'notes'         => [new BadWord],
            'seat_id'       => 'required',
            'event_id'      => 'required' 
        ]);

        // Generate for Title Booking
        $eventName = Event::find($request->event_id)->title;
        $title = $eventName .' ('.$request->fullname.' : '.$request->email.')';

        // Save to Title Booking
        $booking = new Booking;
        $booking->fullname = $request->fullname;
        $booking->email = $request->email;
        $booking->notes = $request->notes;
        $booking->title = $title;
        $booking->seat_id = $request->seat_id;
        $booking->event_id = $request->event_id;
        $booking->save();

        return redirect()->route('booking.index')->with('success', 'Booking Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('show_booking', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return view('edit_booking', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'fullname'      => 'required',
            'email'         => 'required|email',
            'email'         => ['required', new DisposableEmail],
            'notes'         => [new BadWord],
            'seat_id'       => 'required',
            'event_id'      => 'required' 
        ]);

        $eventName = Event::find($request->event_id)->title;
        $title = $eventName .' ('.$request->fullname.' : '.$request->email.')';

        $title = '('.$request->fullname.' : '.$request->email.')';
        $booking = new Booking;
        $booking->fullname = $request->fullname;
        $booking->email = $request->email;
        $booking->notes = $request->notes;
        $booking->title = $title;
        $booking->seat_id = $request->seat_id;
        $booking->event_id = $request->event_id;
        $booking->save();

        return redirect()->route('booking.index')->with('success', 'Booking Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('booking.index')->with('success', 'Booking Data deleted successfully');
    }

   
}

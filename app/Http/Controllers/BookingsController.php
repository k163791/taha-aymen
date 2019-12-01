<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Match;
use App\Team;
use Session;
class BookingsController extends Controller
{

    public function index() {
      return view('booking.bookings')->with('bookings', Booking::all());
    }

    public function book($id) {
      $match = Match::find($id);
      return view('booking.index')->with('match', $match)->with('teams', Team::all());
    }

    public function store(Request $request) {
      $book = Booking::create([
        'team1' => $request->team1,
        'team2' => $request->team2,
        'payment' => $request->payment,
        'seats' => $request->seats
      ]);

      Session::flash('success', 'Order Booked');
      return redirect('/');
    }
}

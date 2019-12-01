@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header">
    <h3>My Bookings</h3>
  </div>
  <div class="card-body">
    <div class="card-deck">
      @foreach($bookings as $booking)
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <img src="storage/ticket/ticket.jpg" class="card-img-top" alt="...">
          <h5 class="card-title">{{ $booking->team1 }} VS {{ $booking->team2 }}</h5>
          <p>Payment Method: {{ $booking->payment }}</p>
          <p>No. Of Seats: {{ $booking->seats }}</p>
        </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection

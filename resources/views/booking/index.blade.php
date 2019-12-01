@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-header">
      <h3>Book Match</h3>
    </div>
    <div class="card-body">
      <form class="" action="{{ route('book.store') }}" method="post">
        @csrf
        <div class="form-group">
          <?php
            foreach($teams as $team) {
              if($team->id == $match->team_id1) {
                $team1 = $team;
              } else if($team->id == $match->team_id2) {
                $team2 = $team;
              }
            }
          ?>
          <label for="tname1">Team No. 1</label>
          <input type="text" name="team1" value="{{ $team1->name }}" class="form-control" readonly>
        </div>
        <div class="form-group">
          <label for="tname2">Team No. 2</label>
          <input type="text" name="team2" value="{{ $team2->name }}" class="form-control" readonly>
        </div>
        <div class="form-group">
          <label for="payment">Payment Method</label>
          <select class="browser-default custom-select" name="payment">
            <option value="day">On the day</option>
            <option value="card">Payment Through Card</option>
          </select>
        </div>
        <div class="form-group">
          <label for="seats">No. Of Seats</label>
          <input type="number" name="seats" class="form-control" required>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Book</button>
        </div>
      </form>
    </div>
  </div>
@endsection

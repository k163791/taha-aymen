@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-header">
      <h3>Matches</h3>
    </div>
    <div class="card-body">
      <div class="card-deck">
        @foreach($matches as $match)
        <div class="card" style="width: 18rem;">
          <?php
            foreach($teams as $team) {
              if($team->id == $match->team_id1) {
                $team1 = $team;
              } else if($team->id == $match->team_id2) {
                $team2 = $team;
              }
            }
          ?>
          <img src="{{$team1->image}}" alt="..." height="200px">
          <img src="{{$team2->image}}"  alt="..." height="200px">
          <div class="card-body">
            <h5 class="card-title">{{ $team1->name }} VS {{ $team2->name }}</h5>
            <form class="" action="index.html" method="post">
              @csrf
              <div class="text-center">
                  <a href="#" class="btn btn-primary">Book</a>
              </div>

            </form>
          </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection

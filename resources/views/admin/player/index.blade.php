@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-header">
      <h3>Players</h3>
    </div>
    <div class="card-body">
      <div class="card-deck">
        @foreach($players as $player)
        <div class="card" style="width: 18rem;">
          <img src="{{ $player->image }}" class="card-img-top" alt="..." height="300px">
          <div class="card-body">
            <h5 class="card-title">{{ $player->name }}</h5>
            <p>{{ $player->team->name }}</p>
          </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection

@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-header">
      <h3>Teams</h3>
    </div>
    <div class="card-body">
      <div class="card-deck">
        @foreach($teams as $team)
        <div class="card" style="width: 18rem;">
          <img src="{{ $team->image }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $team->name }}</h5>
          </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection

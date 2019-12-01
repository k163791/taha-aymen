@extends('layouts.app')

@section('content')
  <div class="card-deck">
    @foreach($teams as $team)
    <div class="card" style="width: 18rem;">
      <img src="{{ $team->image }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $team->name }}</h5>
        <form class="" action="index.html" method="post">
          @csrf
          <button class="btn btn-primary" type="submit">View Matches</button>
        </form>
      </div>
      </div>
    @endforeach
  </div>
@endsection

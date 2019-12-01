@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header">
    <h3>Add Match</h3>
  </div>
  <div class="card-body">
    <form class="" action="{{ route('match.store') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="team1">Team No. 1</label>
        <select class="browser-default custom-select" name="team1">
          @foreach($teams as $team)
            <option value="{{ $team->id }}">{{ $team->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="team2">Team No. 2</label>
        <select class="browser-default custom-select" name="team2">
          @foreach($teams as $team)
            <option value="{{ $team->id }}">{{ $team->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="date">Date</label>
        <input type="date" name="date" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="time">Time</label>
        <input type="time" name="time" class="form-control" required>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-success">Add Match</button>
      </div>
    </form>
  </div>
</div>
@endsection

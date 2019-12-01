@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-header">
      <h3>Add Player</h3>
    </div>
    <div class="card-body">
      <form class="" action="{{ route('player.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Player Name</label>
          <input type="text" name="name" required class="form-control">
        </div>
        <div class="form-group">
          <label for="image">Player Image</label>
          <input type="file" name="image" required class="form-control">
        </div>
        <div class="form-group">
          <label for="team">Player Team</label>
          <select class="browser-default custom-select" name="team">
            @foreach($teams as $team)
              <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success">Add Player</button>
        </div>
      </form>
    </div>
  </div>
@endsection

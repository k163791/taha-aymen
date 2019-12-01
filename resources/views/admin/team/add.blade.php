@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-header">
      <h3>Add Team</h3>
    </div>
    <div class="card-body">
      <form class="" action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Team Name</label>
          <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="image">Team Image</label>
          <input type="file" name="image" class="form-control" required>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success">Add Team</button>
        </div>
      </form>

    </div>
  </div>
@endsection

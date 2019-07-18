@extends('layouts.app')

@section('title')
  Tasks
@endsection
@section('content')
  <label for="email" class="col-md-4 col-form-label text-md-right ">Tasks List</label>
  <a href="/tasks/create" ><button>Create</button></a><br>
  <ul>
    @foreach($tasks as $task)
      <a href="/tasks/{{$task -> id}}">
        <li>Title : {{ $task -> title}}, CreateDate : {{ $task -> created_at}}</li>
      </a>
    @endforeach
  </ul>
@endsection

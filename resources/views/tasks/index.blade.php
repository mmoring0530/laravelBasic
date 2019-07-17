@extends('layouts.app')

@section('title')
  Tasks
@endsection
@section('content')
  <h1>Tasks List</h1>
  <a href="/tasks/create"><button>Create</button></a><br>
  <ul>
    @foreach($tasks as $task)
      <a href="/tasks/{{$task -> id}}">
        <li>Title : {{ $task -> title}}, CreateDate : {{ $task -> created_at}}</li>
      </a>
    @endforeach
  </ul>
@endsection

@extends('layouts.app')

@section('title')
  Tasks
@endsection
@section('content')
  <div class="h1 text-center">Task List</div>
  <div class="col text-center">
    <a href="/tasks/create" ><button class="btn btn-primary">Create</button></a><br><br>  
  </div>
  
    @foreach($tasks as $task)
    <div class="h2 text-center"><br>
      <a href="/tasks/{{$task -> id}}">
        Title : {{ $task -> title}}
      </a>
    </div>
    @endforeach
  </ul>
@endsection

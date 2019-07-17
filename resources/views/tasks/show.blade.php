@extends('layouts.app')

@section('title')
  Task Detail
@endsection

@section('content')
  <h1>Task Detail</h1>
  <a href="/tasks"><button>go to list</button></a><br>
  <a href="/tasks/{{ $task->id }}/edit"><button>Edit</button></a><br>
  <form action="/tasks/{{ $task->id}}" method="POST">
    @method('DELETE')
    @csrf
    <a href="/tasks/{{ $task->id }}/delete"><button>Delete</button></a><br>
  </form>
  Title : <br>{{ $task -> title }}<br><br>
  Desc : <br>{{ $task -> description }}<br>
@endsection

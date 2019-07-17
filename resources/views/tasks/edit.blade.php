@extends('layout')

@section('title')
  Edit Tasks
@endsection

@section('content')
  <h1>Edit Tasks</h1>
  <form action="/tasks/{{ $task->id}}" method="post">
    @method('PUT')
    @csrf
    <label>Title</label><br>
    <input type="text" name="title" id="title" value="{{ old('description') ? old('description') : $task->title}}" required><br><br>
    @error('title')
    {{ $message}}
    @enderror<br>

    <label>Description</label><br>
    <textarea name="description" id="description" required>{{ old('description') ? old('description') : $task->description }}</textarea><br>
    @error('description')
    {{ $message}}
    @enderror<br>

    <button>submit</button>
  </form>
  <a href="/tasks/{{ $task->id}}"><button>back</button></a><br>
@endsection

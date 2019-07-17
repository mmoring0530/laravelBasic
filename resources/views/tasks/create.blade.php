@extends('layout')

@section('title')
  Create Tasks
@endsection

@section('content')
  <h1>Create Tasks</h1>
  <form action="/tasks" method="post">
    @csrf
    <label>Title</label><br>
    <input type="text" name="title" id="title" required value="{{ old('title') ? old('title') : ''}}"><br><br>
    @error('title')
    {{ $message}}
    @enderror<br>

    <label>Description</label><br>
    <textarea name="description" id="description" required value="{{ old('description') ? old('description') : ''}}"></textarea><br>
    @error('description')
    {{ $message}}
    @enderror<br>

    <button>submit</button>
  </form>
  <a href="/tasks"><button>back</button></a><br>
@endsection

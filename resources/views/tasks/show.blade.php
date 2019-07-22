@extends('layouts.app')

@section('title')
  Task Detail
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header bg-dark text-white">Task Detail</div>
                <div class="card-body">
                    <div class="form-group row">
                      <label class="col-lg-4 col-form-label text-lg-right">Title : </label>
                    <div class="col-lg-6">
                      {{ $task -> title }}<br><br>
                    </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                          <label class="col-lg-4 col-form-label text-lg-right">Desc : </label>
                        <div class="col-lg-6">
                    {{ $task -> description }}<br>
                    </div>
                    </div>
                      <div class="row justify-content-md-center">
                        <a href="/tasks/{{ $task->id }}/edit"><button class="btn btn-primary">Edit</button></a><br><br>
                      </div>
                      <form action="/tasks/{{ $task->id}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <div class="row justify-content-md-center">
                          <a href="/tasks/{{ $task->id }}/delete"><button class="btn btn-primary">Delete</button></a><br>
                        </div>
                      </form><br>
                      <div class="row justify-content-md-center">
                        <a href="/tasks"><button class="btn btn-primary">go to list</button></a><br>
                      </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
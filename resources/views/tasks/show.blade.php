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
                      <form action="/tasks/{{ $task->id}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a href="/tasks/{{ $task->id }}/delete"><button>Delete</button></a><br>
                      </form>
                      <a href="/tasks/{{ $task->id }}/edit"><button>Edit</button></a><br>
                      <a href="/tasks"><button>go to list</button></a><br>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
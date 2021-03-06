@extends('layouts.app')

@section('title')
  Edit Tasks
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header bg-dark text-white">商品情報修正</div>
                <div class="card-body">
                  <form action="/tasks/{{ $task->id}}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">商品名</label>
                        <div class="col-lg-6">
                    <input type="text" name="title" id="title" value="{{ old('description') ? old('description') : $task->title}}" required><br><br>
                    @error('title')
                    {{ $message}}
                    @enderror<br>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">詳細</label>
                        <div class="col-lg-6">
                    
                    <textarea name="description" id="description" required>{{ old('description') ? old('description') : $task->description }}</textarea><br>
                    @error('description')
                    {{ $message}}
                    @enderror<br>
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                    <button class="btn btn-primary">修正</button>
                    </div>
                  </form><br>
                  <div class="row justify-content-md-center">
                  <a href="/tasks/{{ $task->id}}"><button class="btn btn-primary">戻る</button></a><br>
                </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  
@endsection

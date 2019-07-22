@extends('layouts.app')

@section('title')
  Create Tasks
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header bg-dark text-white">Create Tasks</div>
                
                <div class="card-body">
                <form action="/tasks" method="post">
                  @csrf
                  <div class="form-group row">
                      <label class="col-lg-4 col-form-label text-lg-right">title</label>
                      <div class="col-lg-6">
                  <input type="text" name="title" id="title" required value="{{ old('title') ? old('title') : ''}}"><br><br>
                  @error('title')
                  {{ $message}}
                  @enderror<br>
                      </div>
                  </div>     
                  <div class="form-group row">

                  <label class="col-lg-4 col-form-label text-lg-right">Description</label>
                      <div class="col-lg-6">
                  
                  <textarea name="description" id="description" required value="{{ old('description') ? old('description') : ''}}"></textarea><br>
                  @error('description')
                  {{ $message}}
                  @enderror
                      </div>
                    </div>      
                    <div class="row justify-content-md-center"> 
                        <button class="btn btn-primary">submit</button>
                    </div>
                </form><br>
                <div class="row justify-content-md-center"> 
                        <a href="/tasks"><button class="btn btn-primary">back</button></a><br>    
                  </div>
            </div>
        </div>
    </div>
  </div>
</div>

  
@endsection

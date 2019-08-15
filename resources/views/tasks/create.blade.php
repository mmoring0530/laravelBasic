@extends('layouts.app')

@section('title')
  商品登録
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header bg-dark text-white">商品登録</div>                
                <div class="card-body">
                <form action="/tasks" method="post">
                  @csrf
                  <div class="form-group row">
                      <label class="col-lg-4 col-form-label text-lg-right">商品名</label>
                      <div class="col-lg-6">
                        <input type="text" name="title" id="title" required value="{{ old('title') ? old('title') : ''}}"><br><br>
                        @error('title'){{ $message}}@enderror<br>
                      </div>
                  </div>     
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-right">詳細</label>
                    <div class="col-lg-6">
                        <textarea name="description" id="description" required value="{{ old('description') ? old('description') : ''}}"></textarea><br>
                        @error('description'){{ $message}}@enderror
                    </div>
                  </div>
                    <div class="row justify-content-md-center" >
                        <a href="/tasks" style="margin:0 2% 0 0;"><button class="btn btn-primary">戻る</button></a><br>      
                        <button class="btn btn-primary">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection

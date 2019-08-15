@extends('layouts.app')

@section('title')
orderlist
@endsection
<head>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
@section('content')
  <div class="h1 text-center">
    注文一覧
    <br><a href="#" ><button class="btn btn-primary">登録</button></a>
  </div><br><br>  
  
    {{-- @foreach($tasks as $task)
    <div class="h2 text-center"><br>
      <a href="/tasks/{{$task -> id}}">
        注文名： {{ $task -> title}}
      </a>
    </div>
    @endforeach --}}
  </ul>
@endsection

@extends('layout')

@section('title')
  Welcome
@endsection
@section('content')
  WelcomeContent
  <?php var_dump($books) ?>
  <ul>
    @foreach($books as $book)
      <li>{{$book}}</li>
    @endforeach
</ul>


@endsection

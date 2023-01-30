@extends('template')
@section('content')
  <p>
    {{ $post->title }} <br>
    {{ $post->body }}<br>
    {{ $post->user->email }}
  </p>
@endsection
@extends('layouts.app')
@section('content')

<h1 class='titulo'>All Posts</h1>

@foreach ($posts as $post)

    <a href="{{route('posts.show', $post->id)}}" class='posts'>{{ $post->titulo }}</a>
    <br>

@endforeach

@endsection
@extends('layouts.app')
@section('content')

<script src="{{ asset('js/postsIndex.js') }}"></script>

<h1 class='titulo'>Posts</h1>

<input type="button" value="Crear nuevo Post" class="btnCrearPost" id="crearPost">

<br>

@if (count($posts) > 0)

@foreach ($posts as $post)

    <a href="{{route('posts.show', $post->id)}}" class='posts'>{{ $post->titulo }}</a>
    <br>

@endforeach

@else 

   <h3 class="session">No tienes ningun post.</h3>

@endif

@endsection
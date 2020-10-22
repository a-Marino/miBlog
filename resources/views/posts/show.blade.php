@extends('layouts.app')
@section('content')

<script src="{{ asset('js/postsShow.js') }}"></script>

<h1 class="titulo">{{ $post->titulo }}</h1>
<p class="contenido">{{ $post->contenido }}</p>

<form action="/posts/{{$post->id}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value='Eliminar Post' class='btnEliminarPost'>
</form>

<a href="{{route('posts.edit', $post->id)}}" class='btn edit btn-sm btn-outline-dark'>Editar POST</a>

@endsection



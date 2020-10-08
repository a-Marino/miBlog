@extends('layouts.app')
@section('content')

<h1 class="titulo">{{ $post->titulo }}</h1>
<p class="contenido">{{ $post->contenido }}</p>

<form action="/posts/{{$post->id}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value='Eliminar Post' class='btnEliminarPost'>
</form>

@endsection
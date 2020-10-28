@extends('layouts.app')
@section('content')


<h1 class="titulo">{{ $tag->nombre }}</h1>

<form action="/tags/{{$tag->id}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value='Eliminar Tag' class='btnEliminarPost'>
</form>

<a href="{{route('tags.edit', $tag->id)}}" class='btn edit btn-sm btn-outline-dark'>Editar TAG</a>

@endsection

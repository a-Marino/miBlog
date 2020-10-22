@extends('layouts.app')
@section('content')

<h1 class='titulo'>Editar Post</h1>

<div class="form">

<form action="/posts/{{$post->id}}" method="POST">
@csrf
@method('PUT')
    <label for="titulo">Titulo:</label>
    <input type="text" name="titulo" value='{{$post->titulo}}'> <br>
    <label for="contenido">Contenido:</label> <br>
    <textarea name="contenido" cols="100" rows="10" class='contenido'>{{$post->contenido}}</textarea>
    <br>

    <input type="submit" value="Editar Post" class='btnCrearPost2'>
</form>

</div>



@endsection
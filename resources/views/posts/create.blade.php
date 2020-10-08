@extends('layouts.app')
@section('content')

<h1 class='titulo'>Crear Post</h1>

<div class="form">

<form action="/posts" method="post">
@csrf
    <label for="titulo">Titulo:</label>
    <input type="text" name="titulo"> <br>
    <label for="contenido">Contenido:</label> <br>
    <textarea name="contenido" cols="100" rows="10" class='contenido'></textarea>
    <br>

    <input type="submit" value="Crear Post" class='btnCrearPost2'>
</form>

</div>



@endsection
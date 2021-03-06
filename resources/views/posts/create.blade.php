@extends('layouts.app')
@section('content')

<h1 class='titulo'>Crear Post</h1>

<div class="form">

<form action="/posts" method="post" enctype="multipart/form-data">
@csrf
    <label for="titulo">Titulo:</label>
    <input type="text" name="titulo"> <br>
    <label for="contenido">Contenido:</label> <br>
    <textarea name="contenido" cols="100" rows="10" class='contenido'></textarea>
    <br>
    <fieldset>
        <label for="">Tags:</label>
        <br>
        @foreach ($tags as $tag)

            <!-- crear checkbox para tags -->
            <input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{ $tag->nombre }} <br>

        @endforeach 
    </fieldset>
    <br>
    <label for="portada">Seleccione una foto de portada:</label>
    <div class="btnFile">
        <input type="file" name="portada" id="portada">

    </div>
    <input type="submit" value="Crear Post" class='btnCrearPost2'>
</form>

</div>



@endsection
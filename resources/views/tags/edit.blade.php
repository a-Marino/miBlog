@extends('layouts.app')
@section('content')

<h1 class='titulo'>Editar Tag</h1>

<div class="form">

<form action="/tags/{{$tag->id}}" method="POST">
@csrf
@method('PUT')
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value='{{$tag->nombre}}'> <br>

    <input type="submit" value="Editar Tag" class='btnCrearPost2'>
</form>

</div>



@endsection
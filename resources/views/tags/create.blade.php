@extends('layouts.app')
@section('content')

<h1 class='titulo'>Crear Tag</h1>

<div class="form">

<form action="/tags" method="post">
@csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre"> <br>

    <input type="submit" value="Crear Tag" class='btnCrearPost2'>
</form>

</div>



@endsection
@extends('layouts.app')
@section('content')

<script src="{{ asset('js/postsIndex.js') }}"></script>

<h1 class='titulo'>Mis Posts</h1>

<input type="button" value="Crear nuevo Post" class="btnCrearPost" id="crearPost">

<br>

@foreach ($posts as $post)

    <a href="">{{ $post->titulo }}</a>
    <br>

@endforeach

@endsection
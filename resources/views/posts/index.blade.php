@extends('layouts.app')
@section('content')

<script src="{{ asset('js/postsIndex.js') }}"></script>

<h1 class='titulo'>Mis Posts</h1>

<input type="button" value="Crear nuevo Post" class="btnCrearPost" id="crearPost">

<br>

<h3 class='session'>{{ session('mensaje') }}</h3>

@foreach ($posts as $post)

    <a href="{{route('posts.show', $post->id)}}" class='posts'>{{ $post->titulo }}</a>
    <br>

@endforeach

@endsection
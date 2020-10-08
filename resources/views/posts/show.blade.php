@extends('layouts.app')
@section('content')

<h1 class="titulo">{{ $post->titulo }}</h1>
<p class="contenido">{{ $post->contenido }}</p>

@endsection
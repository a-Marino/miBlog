@extends('layouts.app')
@section('content')

<h1 class='titulo'>Tags</h1>

@if (count($tags) > 0)

@foreach ($tags as $tag)

    <a href="{{route('tags.show', $tag->id)}}" class='posts'>{{ $tag->nombre }}</a>
    <br>

@endforeach

@else 

   <h3 class="session">No hay ningun tag creado.</h3>

@endif

@endsection
@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Início</a></li>
    <li class="breadcrumb-item active">Quem Somos</li>
  </ol>
</nav>

<div class="starter-template">
  <h1>
  	<a tabindex="0" data-toggle="popover" data-content="<iframe src='https://www.youtube.com/embed/{{$quemsomos->titulo_youtube_id}}?autoplay=1&loop=1&playlist=VtafKnreEoA' frameborder='0'></iframe>" 
      style="text-decoration: none; color: #2d3436">
  		{{$quemsomos->titulo}}
      <i class="fas fa-deaf text-primary"></i>
  	</a>
  </h1>
  <p class="textos lead">{!! nl2br(e($quemsomos->texto)) !!}</p>
</div>

@endsection
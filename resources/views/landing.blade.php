@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Início</a></li>
  </ol>
</nav>

<div class="starter-template">
  <img src="logo.png" style="width: 200px">
  <h1>
  	<a tabindex="0" data-toggle="popover" data-content="<iframe src='https://www.youtube.com/embed/{{$litorallibras->titulo_youtube_id}}?autoplay=1&loop=1&playlist=VtafKnreEoA' frameborder='0'></iframe>" 
      style="text-decoration: none; color: #2d3436">
  		{{$litorallibras->titulo}}
      <i class="fas fa-deaf text-primary"></i>
  	</a>
  </h1>
  <p class="textos lead">{!! nl2br(e($litorallibras->texto)) !!}</p>
</div>

@endsection
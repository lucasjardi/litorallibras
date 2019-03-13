@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Início</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/glossario') }}">Glossário</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/glossario/'.str_slug($video->glossario->categoria)) }}">{{$video->glossario->categoria}}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{$video->descricao}}</li>
  </ol>
</nav>

<iframe style="width:100%;max-width:600px;height: 315px;" src="https://www.youtube.com/embed/{{$video->youtube_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<h1>{{$video->descricao}}</h1>

<p>
	Atualizado em: {{date('d/m/Y H:i:s', strtotime($video->updated_at))}}
</p>

@endsection
@extends('layouts.app')


@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Início</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/glossario') }}">Glossário</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ucfirst($item->categoria)}}</li>
  </ol>
</nav>

<h1>{{ucfirst($item->categoria)}}</h1>
<p>	{{$item->descricao}} </p>

@foreach ($item->videos->chunk(4) as $items)

<div class="row">
	@foreach ($items as $video)
		<div class="col-s3 ml-3 mb-3">
			<div class="card" style="width: 16rem;">
			  <img class="card-img-top" src="https://img.youtube.com/vi/{{$video->youtube_id}}/maxresdefault.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">{{$video->descricao}}</h5>
			    <a href="{{url('/video/'.$video->youtube_id)}}" class="btn btn-primary">Ver Vídeo</a>
			  </div>
			</div>
		</div>
	@endforeach
</div>

@endforeach

@endsection
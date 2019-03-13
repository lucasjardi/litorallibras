@extends('layouts.app')


@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Início</a></li>
    <li class="breadcrumb-item active" aria-current="page">Glossário</li>
  </ol>
</nav>


@foreach ($glossario->chunk(4) as $itemglossario)

<div class="row">
@foreach ($itemglossario as $item)
	<div class="col-s3">
		<div class="card bg-light ml-4 mb-4" style="width: 16rem;">
			<div class="card-header">{{$item->categoria}}</div>
		  <div class="card-body">
		    {{-- <h5 class="card-title">{{$item->categoria}}</h5> --}}
		    {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
		    <p class="card-text">
		    	{{$item->descricao}}
		    </p>
		    <a href="{{ url('/glossario/'. str_slug($item->categoria)) }}" class="card-link">Ir até {{$item->categoria}}</a>
		  </div>
		</div>
	</div>
@endforeach
</div>

@endforeach

@endsection
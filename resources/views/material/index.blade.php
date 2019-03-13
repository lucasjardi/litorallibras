@extends('layouts.app')


@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Início</a></li>
    <li class="breadcrumb-item active" aria-current="page">Material Teórico</li>
  </ol>
</nav>

@foreach ($materiais->chunk(4) as $materials)

<div class="row">
@foreach ($materials as $material)
	<div class="col-s3">
		<div class="card bg-light ml-4 mb-4" style="width: 16rem; height: 180px">
			<div class="card-header">{{$material->titulo}}</div>
		  <div class="card-body">
				{{-- <h5 class="card-title">{{$material->titulo}}</h5> --}}
		    <a href="{{ url('/material/'. str_slug($material->titulo)) }}" class="card-link">Ir até {{$material->titulo}}</a>
		  </div>
		</div>
		</div>
@endforeach
</div>

@endforeach

@endsection
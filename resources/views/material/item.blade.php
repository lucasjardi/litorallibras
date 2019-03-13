@extends('layouts.app')


@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Início</a></li>
    <li class="breadcrumb-item"><a href="{{ url('/material') }}">Material Teórico</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{$item->titulo }}</li>
  </ol>
</nav>

@isset ($item)
    <h1>{{ucfirst($item->titulo)}}</h1>
    <h6 class="text-secondary">Atualizado em {{date('d/m/Y H:i:s', strtotime($item->updated_at))}}</h6>
	<p class="lead textos"> {!! nl2br(e($item->texto)) !!} </p>
@endisset

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@endsection
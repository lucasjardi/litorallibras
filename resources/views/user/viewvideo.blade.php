@extends('layouts.admin')

@section('content')

<video width="640" controls>
  <source src="{{ "/storage/" .$video->path }}" type="video/mp4">
  {{-- <source src="movie.ogg" type="video/ogg"> --}}
  Your browser does not support the video tag.
</video>

<h1>{{$video->descricao}}</h1>

<p>
	Enviador por: {{$video->user->name}} ({{$video->user->email}}) <br>
	Cidade do Usuário: {{$video->user->cidade}} <br>
	Data de Envio: {{$video->created_at}}
</p>

<form class="d-inline text-danger" id="form" method="POST" action="{{ url('/admin/sinais/'.$video->id) }}">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<button class="btn btn-danger" type="submit">Excluir</button>
</form>

@endsection
@extends('layouts.admin')

@section('content')

<p class="float-right mt-2" style="">
  <a href="{{ url('/admin/material/formulario') }}" class="btn btn-primary">Adicionar Material</a>
</p>
@if( Session::has('mensagem_sucesso') )
    <div class="alert alert-success alert-dismissible fade show">
        {{ Session::get('mensagem_sucesso') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Categoria</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($materiais as $material)
    <tr>
      <th scope="row">{{$material->id}}</th>
      <td>{{$material->titulo}}</td>
      <td><a href="{{ url('/admin/material/'.$material->id.'/editar') }}">Editar</a> | 
      <form class="d-inline text-danger" id="form" method="POST" action="{{ url('/admin/material/'.$material->id) }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button class="text-primary" type="submit" 
        style="border:none; background-color: #fff;cursor: pointer;">Excluir</button>
      </form>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
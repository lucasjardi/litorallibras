@extends('layouts.admin')

@section('content')

@if( Session::has('mensagem_sucesso') )
    <div class="alert alert-success alert-dismissible fade show">
        {{ Session::get('mensagem_sucesso') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<h3 class="badge badge-primary large mt-4" style="font-size: 18px">Vídeos Enviados por usuários</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descrição</th>
      <th scope="col">Usuário</th>
      <th scope="col">Cidade</th>
      <th scope="col">Data</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($sinais as $sinal)
    <tr>
      <th scope="row">{{$sinal->id}}</th>
      <td>{{$sinal->descricao}}</td>
      <td>{{$sinal->user->name}} <span class="text-secondary">({{$sinal->user->email}})</span></td>
      <td>{{$sinal->user->cidade}}</td>
      <td>{{$sinal->created_at->diffForHumans()}}</td>
      <td>
      	  <a href="{{ url('/admin/sinais/'.$sinal->id) }}">Visualizar</a> | 
	      <form class="d-inline text-danger" id="form" method="POST" action="{{ url('/admin/sinais/'.$sinal->id) }}">
	        {{ csrf_field() }}
          {{ method_field('DELETE') }}
	        <button class="text-primary" type="submit" 
	        style="border:none; background-color: #fff;cursor: pointer;">Excluir</button>
	      </form>
  	  </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
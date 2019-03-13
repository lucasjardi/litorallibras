@extends('layouts.admin')

@section('content')
<form method="POST" action="{{ isset($glossario) ? '/admin/glossario/'.$glossario->id : '/admin/glossario/store' }}" class="mt-2">
  {{ csrf_field() }}
  @isset ($glossario)
  {{ method_field('PATCH') }}
  @endisset

  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
              @endforeach
          </ul>
      </div>
  @endif

  <div class="form-group">
    <label for="exampleFormControlInput1">Categoria</label>
    <input type="text" name="categoria" class="form-control" placeholder="Nome da Categoria do Item do Glossário"
    value="{{isset($glossario) ? $glossario->categoria : ''}}" required>
  </div>
  <div class="form-group">
    <label>Descrição</label>
    <textarea name="descricao" class="form-control" rows="8">{{isset($glossario) ? $glossario->descricao : ''}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary mb-2">
  	{{isset($glossario) ? "Salvar Alterações" : "Salvar"}}
  </button>
</form>

@endsection
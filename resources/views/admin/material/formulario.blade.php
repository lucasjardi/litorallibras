@extends('layouts.admin')

@section('content')

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

<form method="POST" action="{{ isset($material) ? '/admin/material/'.$material->id : '/admin/material/store' }}" class="mt-2">
  {{ csrf_field() }}
  @isset ($material)
  {{ method_field('PATCH') }}
  @endisset

  <div class="form-group">
    <label for="exampleFormControlInput1">Título</label>
    <input type="text" name="titulo" class="form-control" placeholder="Título da Categoria"
    value="{{isset($material) ? $material->titulo : ''}}">
  </div>
  <div class="form-group">
    <label>Texto</label>
    {{-- <input type="text" name="texto" class="form-control" placeholder="Texto do Material"
    value="{{isset($material) ? $material->texto : ''}}"> --}}
    <textarea name="texto" class="form-control" rows="8">{{isset($material) ? $material->texto : ''}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary mb-2">
    {{isset($material) ? "Salvar Alterações" : "Salvar"}}
  </button>
</form>

@endsection
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

<form method="POST" action="{{ isset($video) ? '/admin/videos/'.$video->id : '/admin/videos/store' }}" class="mt-2">
  {{ csrf_field() }}
  @isset ($video)
  {{ method_field('PATCH') }}
  @endisset

   <div class="form-group">
    <label for="exampleFormControlSelect2">Categoria</label>
    <select class="form-control" id="exampleFormControlSelect2" name="glossario_id">
      @foreach ($categorias as $key => $value)
        <option value="{{$key}}" 
        @isset ($video)
            {{$key == $video->glossario_id ? 'selected' : ''}}
        @endisset>{{$value}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">URL do Vídeo do Youtube</label>
    <input type="text" name="youtube_id" class="form-control" placeholder="Ex: https://www.youtube.com/watch?v=hGEVzIU-UVA"
    value="{{isset($video) ? 'https://www.youtube.com/watch?v=' . $video->youtube_id : ''}}">
  </div>
  <div class="form-group">
    <label>Descrição</label>
    <textarea name="descricao" class="form-control" rows="8">{{isset($video) ? $video->descricao : ''}}</textarea>
    {{-- <input type="text" name="descricao" class="form-control" placeholder="Breve Descrição"
    value="{{isset($video) ? $video->descricao : ''}}"> --}}
  </div>
  <button type="submit" class="btn btn-primary mb-2">
  	{{isset($video) ? "Salvar Alterações" : "Salvar"}}
  </button>
</form>

@endsection
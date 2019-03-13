@extends('layouts.admin')

@section('content')

@if( Session::has('mensagem_sucesso') )
    <div class="alert alert-success alert-dismissible fade show mt-2">
        {{ Session::get('mensagem_sucesso') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show mt-2">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<form method="POST" action="{{ url('/admin/litoral-libras') }}" class="mt-2">
  {{ csrf_field() }}
  @isset ($litorallibras)
  {{ method_field('PATCH') }}
  @endisset

  <div class="p-2" style="border: 2px solid #ccc">
    <div class="form-group">
      <label for="exampleFormControlInput1">Título (*)</label>
      <input type="text" name="titulo" class="form-control" placeholder="Título"
      value="{{isset($litorallibras) ? $litorallibras->titulo : ''}}">
    </div>
    <div class="form-group">
      <label class="text-secondary" for="exampleFormControlInput1">Vídeo Auxiliar para o Título (Opcional)</label>
      <input type="text" name="titulo_youtube_id" class="form-control" placeholder="https://www.youtube.com/watch?v=bEq_HIQF3XY"
      value="{{isset($litorallibras) ? (!is_null($litorallibras->titulo_youtube_id) ? 'youtu.be/'. $litorallibras->titulo_youtube_id : '') : ''}}" />
    </div>

    @isset ($litorallibras)
        @if ($litorallibras->titulo_youtube_id !== "")
          <img src="https://img.youtube.com/vi/{{$litorallibras->titulo_youtube_id}}/default.jpg">
        @endif
    @endisset
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Texto (*)</label>
    {{-- <input type="text" name="texto" class="form-control" placeholder="Texto"
    value="{{$litorallibras->texto}}"> --}}
    <textarea name="texto" class="form-control" rows="8">{{isset($litorallibras) ? $litorallibras->texto : ''}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary mb-2">
  	Salvar
  </button>
</form>
@endsection
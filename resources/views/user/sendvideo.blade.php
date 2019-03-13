@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Enviar Vídeo <a class="float-right" href="{{ url('logout') }}"><i class="fas fa-sign-out-alt"></i> Sair</a></div>

                <div class="alert alert-info" role="alert">
                    O formato do vídeo deve ser <b>mp4,avi,mov ou ogg</b> e até <b>20 MB</b>.
                </div>

                <div class="card-body">
                    @if( Session::has('mensagem_sucesso') )
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ Session::get('mensagem_sucesso') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('user.sendvideo') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="descricao" class="col-md-4 col-form-label text-md-right">Descrição do Sinal</label>

                            <div class="col-md-6">
                                <input id="descricao" type="text" class="form-control{{ $errors->has('descricao') ? ' is-invalid' : '' }}" name="descricao" value="{{ old('descricao') }}" required autofocus>

                                @if ($errors->has('descricao'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('descricao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="customFile" class="col-md-4 col-form-label text-md-right">Vídeo do Sinal</label>

                            <div class="col-md-6">

                                <div class="custom-file">
                                  <input type="file" onchange="setFilenameToLabel(this)" accept="video/*" name="video" class="custom-file-input{{ $errors->has('video') ? ' is-invalid' : '' }}" id="customFile" required>
                                  <label class="custom-file-label" for="customFile" id="labelVideo">Selecionar</label>
                                </div>

                                @if ($errors->has('video'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('video') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Enviar Vídeo
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cidade" class="col-md-4 col-form-label text-md-right">Cidade</label>

                            <div class="col-md-6">
                                {{-- select cidades do litoral norte rs --}}
                                <select id='cidade' name='cidade' class="custom-select" required>
                                  <option></option>
                                  <option value="Torres">Torres</option>
                                  <option value="Mampituba">Mampituba</option>
                                  <option value="Dom Pedro de Alcântara">Dom Pedro de Alcântara</option>
                                  <option value="Arroio do Sal">Arroio do Sal</option>
                                  <option value="Morrinhos do Sul">Morrinhos do Sul</option>
                                  <option value="Três Cachoeiras">Três Cachoeiras</option>
                                  <option value="Três Forquilhas">Três Forquilhas</option>
                                  <option value="Itati">Itati</option>
                                  <option value="Maquiné">Maquiné</option>
                                  <option value="Terra de Areia">Terra de Areia</option>
                                  <option value="Capão da Canoa">Capão da Canoa</option>
                                  <option value="Xangrilá">Xangrilá</option>
                                  <option value="Imbé">Imbé</option>
                                  <option value="Osório">Osório</option>
                                  <option value="Tramandaí">Tramandaí</option>
                                  <option value="Cidreira">Cidreira</option>
                                  <option value="Balneário Pinhal">Balneário Pinhal</option>
                                  <option value="Palmares do Sul">Palmares do Sul</option>
                                  <option value="Capivari do Sul">Capivari do Sul</option>
                                  <option value="Caraá">Caraá</option>
                                  <option value="Outra">-- Outra Cidade --</option>
                                </select>
                                {{-- fim select --}}

                                @if ($errors->has('cidade'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cidade') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <span class="p-3"></span>

            <center><a href="{{ route('login') }}">Já tem cadastro?</a></center>
        </div>
    </div>
</div>
@endsection

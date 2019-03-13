<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" type="image/png" href="{{asset('favicon.png')}}" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
     <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous" />


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .ativado{
        color: rgba(255,255,255) !important;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
</head>


<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
            <a class="nav-link {{Request::is('admin') ? 'active' : ''}}" href="{{ route('admin') }}">
              Início
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('*/glossario') || Request::is('*/glossario/*') ? 'active' : ''}}"
            href="{{ url('/admin/glossario') }}">
              Glossário
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('*/videos') || Request::is('*/videos/*') ? 'active' : ''}}" 
            href="{{ url('/admin/videos') }}">
              Vídeos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('*/material') || Request::is('*/material/*') ? 'active' : ''}}" 
            href="{{ url('/admin/material') }}">
              Material Teórico
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('*/litoral-libras') ? 'active' : ''}}" 
            href="{{ url('/admin/litoral-libras') }}">
              O que é o Litoral Libras?
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('*/quemsomos') ? 'active' : ''}}" 
            href="{{ url('/admin/quemsomos') }}">
              Quem somos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="{{ url('/') }}" target="_blank">
              <i class="fas fa-external-link-alt"></i> Acessar Site
            </a>
          </li>
    </ul>
    <span class="navbar-text m-0 p-0">
      <a class="nav-link" href="{{ url('/logout') }}">Sair</a>
    </span>
  </div>
</nav>

<main role="main" class="container">
  @yield('content')
</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

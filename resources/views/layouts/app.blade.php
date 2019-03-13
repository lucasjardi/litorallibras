<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" type="image/png" href="favicon.png" />

    <!-- Custom style  -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
     <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> --}}

</head>
<body>
    
<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
  <a class="navbar-brand" href="{{url('/')}}">{{ config('app.name', 'Laravel') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link {{Request::is('glossario') || Request::is('glossario/*') ? 'active' : ''}}" href="{{ url('/glossario') }}" >
          Glossário
        </a>
      </li>
      <li>
        <a tabindex="0" id="popGlossario" class="nav-link" href="" onclick="event.preventDefault()" data-content="<iframe src='https://www.youtube.com/embed/-mqu5UAWpCU?autoplay=1&loop=1&playlist=-mqu5UAWpCU' frameborder='0'></iframe>" ><i class="fas fa-deaf"></i></a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/material') }}" class="nav-link {{Request::is('material') || Request::is('material/*') ? 'active' : ''}}" href="{{ url('/material') }}">Material Teórico</a>
      </li>
      <li>
        <a tabindex="0" onclick="event.preventDefault()" id="popMaterial" class="nav-link" href="" data-content="<iframe src='https://www.youtube.com/embed/-6OnQzqWdvQ?autoplay=1&loop=1&playlist=-6OnQzqWdvQ' frameborder='0'></iframe>" ><i class="fas fa-deaf"></i></a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/quem-somos') }}" class="nav-link {{Request::is('quem-somos') ? 'active' : ''}}" href="{{ url('/quem-somos') }}">Quem Somos</a>
      </li>
      <li>
        <a tabindex="0" onclick="event.preventDefault()" id="popQuemSomos" class="nav-link" href="" data-content="<iframe src='https://www.youtube.com/embed/mR8aKBbwz-o?autoplay=1&loop=1&playlist=mR8aKBbwz-o' frameborder='0'></iframe>" ><i class="fas fa-deaf"></i></a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/admin') }}" class="nav-link {{Request::is('user/*') ? 'active' : ''}}" href="{{ url('/admin') }}">Enviar Sugestão</a>
      </li>
      <li>
        <a tabindex="0" onclick="event.preventDefault()" id="popEnviarSugestao" class="nav-link" href="" data-content="<iframe src='https://www.youtube.com/embed/5-Z5V1NvaUw?autoplay=1&loop=1&playlist=5-Z5V1NvaUw' frameborder='0'></iframe>" ><i class="fas fa-deaf"></i></a>
      </li>
    </ul>
    @guest
      <span class="navbar-text">
        <a class="{{Request::is('login') ? 'ativado' : ''}}" href="{{ url('/login') }}" style="color: rgba(255,255,255,.5)">Login</a>
      </span>
    @endauth
    @auth
      @if (Auth::user()->is_admin === 1)
        <span class="navbar-text">
          <a class="{{Request::is('admin') ? 'ativado' : ''}}" href="{{ url('/admin') }}" style="color: rgba(255,255,255,.5)">
            Acessar Painel
          </a>
        </span>
      @endif
    @endauth
  </div>
</nav>

    <main role="main" class="container">
        @yield('content')
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
      $(function () {
        $('#popGlossario').popover({
          html: true,
          placement: 'bottom'
        });

        $('#popMaterial').popover({
          html: true,
          placement: 'bottom'
        });

        $('#popEnviarSugestao').popover({
          html: true,
          placement: 'bottom'
        });

        $('#popQuemSomos').popover({
          html: true,
          placement: 'bottom'
        });

        $('[data-toggle="popover"]').popover({
          container: 'body',
          html: true,
          // trigger: 'focus',
          placement: 'bottom'
        });

        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            document.getElementById('labelVideo').innerHTML = fileName;
        });
      })

      function toggleGlossario() {
        $('#popGlossario').popover('toggle');
      }

      function toggleMaterial() {
        $('#popMaterial').popover('toggle');
      }

      function toggleQuemSomos() {
        $('#popQuemSomos').popover('toggle');
      }

      function toggleSugestao() {
        $('#popEnviarSugestao').popover('toggle');
      }

    </script>

    </body>
</html>

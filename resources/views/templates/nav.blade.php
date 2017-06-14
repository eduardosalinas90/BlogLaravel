
<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Blog Laravel</a>
    </div>
  @if(Auth::User())
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Inicio<span class="sr-only">(current)</span></a></li>
        @if (Auth::user()->admin())
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('admin.users.create')}}">Registrar</a></li>
            <li><a href="{{route('admin.users.index')}}">Listar</a></li>
          </ul>
        </li>
        @endif
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('admin.categories.create')}}">Registrar</a></li>
            <li><a href="{{route('admin.categories.index')}}">Listar</a></li>
          </ul>
        </li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Articulos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('admin.articles.create')}}">Registrar</a></li>
            <li><a href="{{route('admin.articles.index')}}">Listar</a></li>
          </ul>
        </li>
         <li><a href="#">Imagenes</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tags <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('admin.tags.create')}}">Registrar</a></li>
            <li><a href="{{route('admin.tags.index')}}">Listar</a></li>
          </ul>
        </li>

      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('front.index') }}" target="_blank">Pagina Principal</a></li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::User()->name}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Perfil</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{route('admin.auth.logout')}}">Salir</a></li>
          </ul>
        </li>


       {{--  <ul class="nav navbar-nav navbar-right">

        <li>
          <a href="{{ route('admin.auth.login') }}">Login</a>

        </li> --}}

        @endif
     {{--  </ul> --}}
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>

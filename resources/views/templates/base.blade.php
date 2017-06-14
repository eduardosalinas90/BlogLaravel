<!DOCTYPE html>
<html>
<head>
    <title> @yield('title','Default') | Panel de Administracion</title>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/chosen/chosen.css')}}">
    @yield('css')
</head>
<body>

<nav>
@include('templates.nav')
</nav>

<section>
<div class="container">
<div class="row">
<div class="col-xs-8 col-sm-8 col-md-offset-2 col-md-8 col-lg-8">
    @include('flash::message')
    @include('errors.custom_error')
</div>
</div>
</div>
    @yield('content')

</section>


<script src="{{asset('plugins/jquery/jquery-3.2.1.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('plugins/chosen/chosen.jquery.js')}}" type="text/javascript"></script>
<script src="{{asset('plugins/trumbowyg/dist/trumbowyg.min.js')}}"></script>
<script src="{{asset('plugins/trumbowyg/dist/langs/es.min.js')}}"></script>


@yield('js')
</body>
</html>

@extends('templates.base')
@section('title','Lista de Tags')
@section('content')
<div class="container">
<div class="row">
<div class="col-xs-8 col-sm-8 col-md-offset-2 col-md-8 col-lg-8">

<p><a href="{{route('admin.tags.create')}}" class="btn btn-info">Registrar Nueva Tag</a></p>

<form action="{{route('admin.tags.index')}}" method="GET" accept-charset="utf-8" class="navbar-form pull-right">

<div class="form-group">
   <input type="search" name="name" id="input" class="form-control" value="" required="required" title="">
   </div>

   <div class="form-group">
  <button type="submit" class="btn btn-success">Buscar</button>
   </div>
</form>
@if(count($tags)> 0)
<table class="table table-condensed table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Accion</th>

        </tr>
    </thead>
    <tbody>
        @foreach($tags as $tag)
        <tr>
            <td>{{$tag->id}}</td>
            <td>{{$tag->name}}</td>

             <td>
                <a href="{{route('admin.tags.edit',$tag->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-cog"></span> Editar</a>
                <a href="{{route('admin.tags.destroy',$tag->id)}}" class="btn btn-danger" onclick=" return confirm('Seguro que quieres eliminar?')"> <span class="glyphicon glyphicon-remove"></span> Eliminar</a>
             </td>

        </tr>
        @endforeach

        @else
        <table class="table table-condensed table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Accion</th>

        </tr>
    </thead>
        <tr>
            <td colspan="3"><div class="text-center text-info">No Hay Registros</div></td>


        </tr>
    </tbody>
</table>



@endif
<div class="text-center">
  {!! $tags->render() !!}
</div>
</div>
</div>
</div>
@endsection



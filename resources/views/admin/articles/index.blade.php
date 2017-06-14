@extends('templates.base')
@section('title','Lista de Articulos')

@section('content')

<div class="container">
<p><a href="{{route('admin.articles.create')}}" class="btn btn-info">Registrar Nuevo Articulo</a></p>
<form action="{{route('admin.articles.index')}}" method="GET" accept-charset="utf-8" class="navbar-form pull-right">

<div class="form-group">
   <input type="search" name="title" id="input" class="form-control" value="" required="required" title="">
   </div>

   <div class="form-group">
  <button type="submit" class="btn btn-success">Buscar</button>
   </div>
</form>
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Article</th>
            <th>Categoria</th>
            <th>Usuario</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
    @foreach($articles as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->title}}</td>
            <td>{{$article->category->name}}</td>
            <td>{{$article->user->name}}</td>
            <td>
                <a href="{{route('admin.articles.edit',$article->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-cog"></span> Editar</a>
                <a href="{{route('admin.articles.destroy',$article->id)}}" class="btn btn-danger" onclick=" return confirm('Seguro que quieres eliminar?')"> <span class="glyphicon glyphicon-remove"></span> Eliminar</a>
            </td>

        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection()

@extends('templates.base')
@section('title','Lista de Categoria')
@section('content')
<div class="container">
<div class="row">
<div class="col-xs-8 col-sm-8 col-md-offset-2 col-md-8 col-lg-8">

<p><a href="{{route('admin.categories.create')}}" class="btn btn-info">Registrar Nueva Categoria</a></p>

<table class="table table-condensed table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Accion</th>

        </tr>
    </thead>
    <tbody>
        @foreach($categories as $categoria)
        <tr>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->name}}</td>

             <td>
                <a href="{{route('admin.categories.edit',$categoria->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-cog"></span> Editar</a>
                <a href="{{route('admin.categories.destroy',$categoria->id)}}" class="btn btn-danger" onclick=" return confirm('Seguro que quieres eliminar?')"> <span class="glyphicon glyphicon-remove"></span> Eliminar</a>
             </td>

        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</div>
@endsection


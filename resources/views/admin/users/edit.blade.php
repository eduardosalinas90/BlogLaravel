@extends('templates.base')
@section('title')
Editar Usuario - $user->name
@endsection

@section('content')
<div class="container">
{!! Form::open(['route'=>['admin.users.update',$user], 'method'=>'PUT']) !!}
<div class="form-group">
    {!! Form::label('name','Nombre') !!}:
    {!! Form::text('name', $user->name, ['class'=>'form-control', 'placeholder'=>'Nombre', 'required']) !!}

</div>

<div class="form-group">
    {!! Form::label('email','Email') !!}:
    {!! Form::email('email', $user->email, ['class'=>'form-control', 'placeholder'=>'Email', 'required']) !!}

</div>



<div class="form-group">
    {!! Form::label('type','Tipo de Usuario') !!}:
    {!! Form::select('type', [''=>'Seleccionar', 'menber'=>'Mienbro', 'admin'=>'Administrador'],$user->type, ['class'=>'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::submit('Actualizar',['class'=>'btn btn-success']) !!}


</div>

{!! Form::close() !!}
</div>

@endsection

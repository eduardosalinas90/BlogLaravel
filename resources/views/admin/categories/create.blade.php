@extends('templates.base')
@section('title')
Crear Categoria
@endsection

@section('content')
<div class="container">


{!! Form::open(['route'=>'admin.categories.store', 'method'=>'POST']) !!}
<div class="form-group">
    {!! Form::label('name','Nombre') !!}:
    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre', 'required']) !!}

</div>

<div class="form-group">

    {!! Form::submit('Guadar',['class'=>'btn btn-success']) !!}

</div>

{!! Form::close() !!}
</div>

@endsection

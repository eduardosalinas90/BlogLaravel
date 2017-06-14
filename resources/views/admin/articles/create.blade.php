@extends('templates.base')
@section('title','Crear de Articulos')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('plugins/trumbowyg/dist/ui/trumbowyg.min.css')}}">
@endsection

@section('content')
<div class="container">
{!! Form::open(['route'=>'admin.articles.store','method'=>'POST', 'files'=>'true']) !!}

<div class="form-group">
    {!! Form::label('title', 'titulo') !!}
    {!! Form::text('title', null, ['class'=>'form-control','required']) !!}

    <div class="form-group">
        {!! Form::label('category_id', 'Categoria') !!}

        {!! Form::select('category_id', $categories, null, ['class'=>'form-control selec-category','placeholder'=>'Select Your Options']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('content', 'Contenido') !!}

        {!! Form::textarea('content', null, ['class'=>'form-control edit-content','required','placeholder'=>'Contenido']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('id_tags', 'Etiquetas') !!}
        {!! Form::select('id_tags[]', $tags, null, ['class'=>'form-control selec-tags','multiple','multiple']) !!}
    </div>

     <div class="form-group">
        {!! Form::label('file', 'Imagen') !!}
        {!! Form::file('file', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Guardar', ['class'=>'btn btn-success']) !!}
    </div>
</div>

{!! Form::close() !!}
@endsection

@section('js')
<script>
$('.selec-tags').chosen({
    placeholder_text_multiple:'Selecciona maximo 3 Tags',
    max_selected_options:3,
    no_results_text: 'Etiqueta no encontrada'
});

$('.selec-category').chosen({
    placeholder_text_single:'Selecciona una categoria'
});

$('.edit-content').trumbowyg({lang: 'es'});



</script>
@endsection
</div>

@extends('templates.base');
@section('title','Galeria de Imagenes')

@section('content')
    <div class="container">
        <div class="row">
    @foreach ($images as $image)
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img src="/img/articles/{{ $image->name}}" alt="" class="img-responsive">
                </div>
                <div class="panel-footer">
                        <p>{{$image->article->title }}</p>
                </div>

            </div>
        </div>
    @endforeach
        </div>
    </div>
@endsection

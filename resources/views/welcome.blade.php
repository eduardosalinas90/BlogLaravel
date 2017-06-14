@extends('templates.base')
@section('title','SEO')
@section('content')
<div class="container">
    <div class="row">
    @if(Auth::User())
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
        </div>
    @else
    <div class="row">
    <div class="col-md-12">
    <div class="jumbotron">
  <h1>Panel de Administacion</h1>
  <p>lorem</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>

    </div>

    </div>

</div>

@endif

</div>

@endsection

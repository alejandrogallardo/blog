@extends('layouts.app')

@section('content')
    <h1>Ingresar nuevo blog</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Titulo')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Titulo'] )}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Contenido')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Cuerpo del Blog'] )}}
        </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'] )}}    
    {!! Form::close() !!}   
@endsection
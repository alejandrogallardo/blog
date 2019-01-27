@extends('layouts.app')

@section('content')
    <h1>Editar publicacion</h1>

    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Titulo')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Titulo'] )}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Contenido')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Cuerpo del Blog'] )}}
        </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class' => 'btn btn-primary'] )}}    
    {!! Form::close() !!}   
@endsection
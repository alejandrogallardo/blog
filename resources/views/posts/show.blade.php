@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-success mt-5">Go Back</a>
    <div>
        <h1>{{ $post->title }}</h1>
        <small>Written on {{ $post->created_at }}</small>
        <hr>
        <div class="">
            <p>{!!$post->body!!}</p>
        </div>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user->id)
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-default">Editar</a>
                
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Eliminar', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
        @endif
    </div>    
@endsection
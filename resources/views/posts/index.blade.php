@extends('layouts.app')

@section('content')
    <h1>Blog</h1>
    <hr>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <a href="/posts/{{ $post->id }}"><h3>{{ $post->title }}</h3></a>
                <p>{!! $post->body !!}</p>
            <small>Fecha de publicacion {{ $post->created_at }} Publicado por: {{ $post->user->name }}</small>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
        <p>No post found</p>
    @endif    
@endsection
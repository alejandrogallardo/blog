@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <br>
                    <a href="/posts/create" class="btn btn-primary">Crear Publicacion</a>
                </div>
            </div>
        </div>
    </div>
</div>

  

  <!-- Area Chart Example-->
    <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-chart-area"></i>
            Tus Publicacines</div>
        <div class="card-body">
          <!-- <canvas id="myAreaChart" width="100%" height="30"></canvas> -->
          <!-- Table Posts -->
    @if(count($posts) > 0 )
    <table class="table table-striped">
        <tr>
            <th>Titulo</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td><a href="/posts/{{ $post->id }}/edit" class="btn btn-info">Editar</a></td>
            <td>
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Eliminar', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            </td>
        </tr>
        @endforeach
    </table>
    @else
        <p>Aun no tienes publicaciones</p>
    @endif    
<!-- End Table Posts -->
        </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>
    <!-- End Area Chart Example-->
@endsection

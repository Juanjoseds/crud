@extends('start')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">{{$producto->nombre}}</h1>
        <p class="lead">{{$producto->descripcion}}</p>
        <button onclick="window.location='/edit/{{$producto->id}}'" class="btn btn-warning">Editar</button>
        <button onclick="window.location='/destroy/{{$producto->id}}'"class="btn btn-danger">Borrar</button>
    </div>
  </div>
@endsection
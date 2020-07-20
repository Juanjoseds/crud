@extends('start')

@section('content')
    <div class="container mt-2">
        <h3>Editar {{$producto ->nombre}}</h3>
        <form action="{{route('update', $producto->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <input class="form-control" type="text" name="nombre" id="nombre" value="{{$producto->nombre}}">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="descripcion" id="descripcion" value="{{$producto->descripcion}}">
            </div>

            <button class='btn btn-warning btn-block' type="submit">Editar producto</button>
        </form>
    </div>
@endsection
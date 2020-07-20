@extends('start')

@section('content')
    <div class="container">
        <div class="row mt-2">
            <div class="col-7">
                <!-- Lista de productos -->
                <h3>Lista de productos</h3>
                @if(!$productos->isEmpty())
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Acción</th>
                        </tr>

                        @foreach ($productos as $producto)
                            <tr>
                                <td onclick="window.location='show/{{$producto->id}}'">{{$producto->id}}</td>
                                <td>{{$producto->nombre}}</td>
                                <td>{{$producto->descripcion}}</td>
                                <td>
                                    <button onclick="window.location='edit/{{$producto->id}}'" class="btn btn-warning">Editar</button>
                                    <button onclick="window.location='destroy/{{$producto->id}}'" class="btn btn-danger">Borrar</button>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                @else
                    <p>¡No hay productos aún!</p>
                @endif
            </div>
            <div class="col-5">
                <h3>Añadir producto</h3>
                <form action="{{route('add')}}" method="POST">
                    @csrf

                    <div class="form-group">
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre">
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" name="descripcion" id="descripcion" placeholder="descripcion">
                    </div>

                    <button class='btn btn-success btn-block' type="submit">Añadir producto</button>
                </form>

                <!-- Mensajes -->
                @if (session('msg'))
                    <div class="alert alert-success mt-3">
                        {{session('msg')}}
                    </div>
                @endif

                <!-- Mensajes: Control de errores validator -->
                @if (session('errors'))
                    <div class="alert alert-danger mt-3">
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
                    
@endsection

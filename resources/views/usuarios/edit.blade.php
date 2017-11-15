@extends('layout')

@section('estilos')
    <style>
        .nombre,
        .apellidos,
        .sexo{
            max-width: 400px;
        }

        .edad {
            max-width: 70px;
        }

        .form-group:last-child {
            margin-bottom: 3px;
        }
    </style>
@stop

@section('contenido')
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5><strong>Editar el usuario {{ $usuario->id }}</strong></h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control nombre" id="nombre" name="nombre" value="{{ $usuario->nombre}}">
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" class="form-control apellidos" id="apellidos" name="apellidos" value="{{ $usuario->apellidos }}">
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad:</label>
                        <input type="number" class="form-control edad" id="edad" name="edad" value="{{ $usuario->edad }}">
                    </div>
                    <div class="form-group">
                        <label for="sexo">Sexo:</label>
                        <select class="form-control sexo" name="sexo" id="sexo">
                            <option value="m" {{ $usuario->sexo == 'm' ? 'selected="selected"' : '' }}>Masculino</option>
                            <option value="f" {{ $usuario->sexo == 'f' ? 'selected="selected"' : '' }}>Femenino</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success fa" value="&#xf0c7;">                      
                        <input type="hidden" name="_method" value="PUT">
                    </div>
                </form>
            </div>
            <div class="panel-footer">
                <a href="{{ route('usuarios.index') }}" class="btn btn-default"><i class="fa fa-arrow-left" aria-hidden="true"></i> Listado de usuarios</a>
            </div>                  
        </div>        
    </div>
@stop
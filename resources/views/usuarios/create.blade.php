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
                <h5><strong>Registrar un nuevo usuario</strong></h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('usuarios.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control nombre" id="nombre" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" class="form-control apellidos" id="apellidos" name="apellidos">
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad:</label>
                        <input type="number" class="form-control edad" id="edad" name="edad">
                    </div>
                    <div class="form-group">
                        <label for="sexo">Sexo:</label>
                        <select class="form-control sexo" name="sexo" id="sexo">
                            <option value="m">Masculino</option>
                            <option value="f">Femenino</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success fa" value="&#xf0c7;">
                    </div>
                </form>
            </div>
            <div class="panel-footer">
                <a href="{{ route('usuarios.index') }}" class="btn btn-default"><i class="fa fa-arrow-left" aria-hidden="true"></i> Listado de usuarios</a>
            </div>                  
        </div>        
    </div>
@stop
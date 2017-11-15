@extends('layout')

@section('estilos')
    <style>
        
    </style>
@stop

@section('contenido')
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5><strong>Usuario {{ $usuario->id }}</strong></h5>
            </div>
            <div class="panel-body">
                <strong>Nombre:</strong>
                <p>{{ $usuario->nombre}}</p>
                <strong>Apellidos:</strong>
                <p>{{ $usuario->apellidos }}</p>
                <strong>Edad:</strong>
                <p>{{ $usuario->edad }}</p>
                <strong>Sexo:</strong>
                <p>{{ $usuario->sexo == 'm' ? 'Masculino' : 'Femenino' }}</p>
                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
                    <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    {{ csrf_field() }}
                    <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    <input type="hidden" name="_method" value="DELETE">                    
                </form>               
            </div>
            <div class="panel-footer">
                <a href="{{ route('usuarios.index') }}" class="btn btn-default"><i class="fa fa-arrow-left" aria-hidden="true"></i> Listado de usuarios</a>
            </div>                  
        </div>        
    </div>
@stop
<!-- http://laraveldaily.com/building-a-laravel-form-without-illuminatehtml/ -->
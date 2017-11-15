@extends('layout')

@section('estilos')
    <style>
        .table {
            margin-bottom: 0px;
        }

        .table > tbody > tr > td {
            vertical-align: middle;
        }

        p {
            font-size: 14px;
        }
    </style>
@stop

@section('contenido')
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5><strong>Listado de usuarios</strong></h5>
            </div>
            <div class="panel-body">
                @if(Session::has('info'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ Session::get('info') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Sexo</th>
                                <th>Edad</th>
                                <th colspan="3" class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <thbody>
                            @foreach($usuarios as $usuario)
                                <tr>
                                    <td><strong>{{ $usuario->id }}<strong></td>
                                    <td>{{ $usuario->nombre }}</td>
                                    <td>{{ $usuario->apellidos }}</td>
                                    <td>{{ $usuario->sexo == 'm' ? 'Masculino' : 'Femenino' }}</td>
                                    <td>{{ $usuario->edad }}</td>
                                    <td width="40px"><a href="{{ route('usuarios.show', $usuario->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-search" aria-hidden="true"></i></a></td>
                                    <td width="40px"><a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-success btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                    <td width="40px">
                                        <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            <input type="hidden" name="_method" value="DELETE">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </thbody>
                    </table>
                </div>
            </div>
            <div class="panel-footer">
                <a href="{{ route('usuarios.create') }}" class="btn btn-default"><i class="fa fa-plus" aria-hidden="true"></i> Nuevo usuario</a>
            </div>
        </div>
        <blockquote class="blockquote-reverse">
            <footer>Peter Sandoval Moreno <cite title="Twitter">@pwsandoval</cite></footer>
        </blockquote>      
    </div>
@stop
<!-- https://codecanyon.net/item/ngblaravel-crud-angular-laravel-rest-api-on-jwt-angular-4-bootstrap/20392359?_ga=2.63773295.1732442585.1510635560-1231484162.1510635560 -->
@extends('automotores.admin')

@section('subtitulo','Usuarios')
@section('content')
<br>
<div class="panel panel-default">
    <div class="panel-heading text-center"><h4>Lista de Usuarios</h4></div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-condensed">
                 <tr class="info">
                    <th>#</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Cedula</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th>Tipo</th>
                    <th>Operación</th>
                </tr>
                @foreach($users as $user)
                    <tbody>
                        <tr>
                            <td  class="info text-center">{{ $user->id }}</td>
                            <td>{{ $user->nombres }}</td>
                            <td>{{ $user->apellidos }}</td>
                            <td>{{ $user->cedula }}</td>
                            <td>{{ $user->celular }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->tipo }}</td>
                            <td class="btns">
                                <a href="#">Editar</a>
                                <a href="#">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            <p class="text-center">Hay {{ $users->lastPage() }} páginas</p>
        </div>
    </div>
</div>
{!! $users->render() !!}

@stop
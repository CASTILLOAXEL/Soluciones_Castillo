@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Servicios</h1>
    <a href="{{ route('servicios.create') }}" class="btn btn-primary">Agregar Servicio</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Equipo</th>
                <th>Técnico</th>
                <th>Fecha de Recepción</th>
                <th>Problema</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($servicios as $servicio)
            <tr>
                <td>{{ $servicio->id }}</td>
                <td>{{ $servicio->cliente->nombre }}</td>
                <td>{{ $servicio->equipo->modelo }}</td>
                <td>{{ $servicio->tecnico->nombre }}</td>
                <td>{{ $servicio->fecha_recepcion }}</td>
                <td>{{ $servicio->problema }}</td>
                <td>{{ $servicio->estado }}</td>
                <td>
                    <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

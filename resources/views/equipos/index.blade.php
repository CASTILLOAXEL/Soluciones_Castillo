@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Equipos</h1>
    <a href="{{ route('equipos.create') }}" class="btn btn-primary">Agregar Equipo</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Tipo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($equipos as $equipo)
            <tr>
                <td>{{ $equipo->id }}</td>
                <td>{{ $equipo->marca->nombre }}</td>
                <td>{{ $equipo->modelo }}</td>
                <td>{{ $equipo->tipo }}</td>
                <td>
                    <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" style="display:inline;">
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

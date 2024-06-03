@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Clientes</h1>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">Agregar Cliente</a>
    <table class="table mt-4">
        <thead><link rel="stylesheet" href="css/styles.css">

            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->direccion }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>{{ $cliente->email }}</td>
                <td>
                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
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

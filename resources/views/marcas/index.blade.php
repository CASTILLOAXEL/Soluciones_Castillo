@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Marcas</h1>
    <a href="{{ route('marcas.create') }}" class="btn btn-primary">Agregar Marca</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($marcas as $marca)
            <tr>
                <td>{{ $marca->id }}</td>
                <td>{{ $marca->nombre }}</td>
                <td>
                    <a href="{{ route('marcas.edit', $marca->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('marcas.destroy', $marca->id) }}" method="POST" style="display:inline;">
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

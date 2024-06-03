@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Equipo</h1>
    <form action="{{ route('equipos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="marca_id">Marca</label>
            <select class="form-control" id="marca_id" name="marca_id" required>
                @foreach($marcas as $marca)
                <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" class="form-control" id="modelo" name="modelo" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" class="form-control" id="tipo" name="tipo" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection

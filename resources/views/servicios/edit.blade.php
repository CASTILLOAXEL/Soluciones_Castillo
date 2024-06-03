@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Servicio</h1>
    <form action="{{ route('servicios.update', $servicio->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="cliente_id">Cliente</label>
            <select class="form-control" id="cliente_id" name="cliente_id" required>
                @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}" {{ $servicio->cliente_id == $cliente->id ? 'selected' : '' }}>{{ $cliente->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="equipo_id">Equipo</label>
            <select class="form-control" id="equipo_id" name="equipo_id" required>
                @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}" {{ $servicio->equipo_id == $equipo->id ? 'selected' : '' }}>{{ $equipo->modelo }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tecnico_id">Técnico</label>
            <select class="form-control" id="tecnico_id" name="tecnico_id" required>
                @foreach($tecnicos as $tecnico)
                <option value="{{ $tecnico->id }}" {{ $servicio->tecnico_id == $tecnico->id ? 'selected' : '' }}>{{ $tecnico->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_recepcion">Fecha de Recepción</label>
            <input type="date" class="form-control" id="fecha_recepcion" name="fecha_recepcion" value="{{ $servicio->fecha_recepcion }}" required>
        </div>
        <div class="form-group">
            <label for="problema">Problema</label>
            <textarea class="form-control" id="problema" name="problema" required>{{ $servicio->problema }}</textarea>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="recibido" {{ $servicio->estado == 'recibido' ? 'selected' : '' }}>Recibido</option>
                <option value="reparando" {{ $servicio->estado == 'reparando' ? 'selected' : '' }}>Reparando</option>
                <option value="finalizado" {{ $servicio->estado == 'finalizado' ? 'selected' : '' }}>Finalizado</option>
                <option value="entregado" {{ $servicio->estado == 'entregado' ? 'selected' : '' }}>Entregado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection

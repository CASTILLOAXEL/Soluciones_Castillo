@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Servicio</h1>
    <form action="{{ route('servicios.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="cliente_id">Cliente</label>
            <select class="form-control" id="cliente_id" name="cliente_id" required>
                @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="equipo_id">Equipo</label>
            <select class="form-control" id="equipo_id" name="equipo_id" required>
                @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}">{{ $equipo->modelo }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tecnico_id">Técnico</label>
            <select class="form-control" id="tecnico_id" name="tecnico_id" required>
                @foreach($tecnicos as $tecnico)
                <option value="{{ $tecnico->id }}">{{ $tecnico->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_recepcion">Fecha de Recepción</label>
            <input type="date" class="form-control" id="fecha_recepcion" name="fecha_recepcion" required>
        </div>
        <div class="form-group">
            <label for="problema">Problema</label>
            <textarea class="form-control" id="problema" name="problema" required></textarea>
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="recibido">Recibido</option>
                <option value="reparando">Reparando</option>
                <option value="finalizado">Finalizado</option>
                <option value="entregado">Entregado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection

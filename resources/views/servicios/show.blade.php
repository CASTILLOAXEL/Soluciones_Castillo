@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Servicio</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Cliente: {{ $servicio->cliente->nombre }}</h5>
            <p class="card-text">Equipo: {{ $servicio->equipo->modelo }}</p>
            <p class="card-text">Técnico: {{ $servicio->tecnico->nombre }}</p>
            <p class="card-text">Fecha de Recepción: {{ $servicio->fecha_recepcion }}</p>
            <p class="card-text">Problema: {{ $servicio->problema }}</p>
            <p class="card-text">Estado: {{ $servicio->estado }}</p>
            <a href="{{ route('servicios.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection

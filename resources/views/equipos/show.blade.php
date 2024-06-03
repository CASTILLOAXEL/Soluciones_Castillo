@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Equipo</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Marca: {{ $equipo->marca->nombre }}</h5>
            <p class="card-text">Modelo: {{ $equipo->modelo }}</p>
            <p class="card-text">Tipo: {{ $equipo->tipo }}</p>
            <a href="{{ route('equipos.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection

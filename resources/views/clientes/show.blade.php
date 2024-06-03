@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Cliente</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $cliente->nombre }}</h5>
            <p class="card-text">Dirección: {{ $cliente->direccion }}</p>
            <p class="card-text">Teléfono: {{ $cliente->telefono }}</p>
            <p class="card-text">Email: {{ $cliente->email }}</p>
            <a href="{{ route('clientes.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection

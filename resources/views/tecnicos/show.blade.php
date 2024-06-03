@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Técnico</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $tecnico->nombre }}</h5>
            <p class="card-text">Especialidad: {{ $tecnico->especialidad }}</p>
            <a href="{{ route('tecnicos.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection

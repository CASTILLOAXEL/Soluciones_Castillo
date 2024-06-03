@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Marca</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $marca->nombre }}</h5>
            <a href="{{ route('marcas.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection

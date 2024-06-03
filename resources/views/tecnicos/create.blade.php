@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Técnico</h1>
    <form action="{{ route('tecnicos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="especialidad">Especialidad</label>
            <input type="text" class="form-control" id="especialidad" name="especialidad">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection

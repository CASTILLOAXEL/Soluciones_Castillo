@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Técnico</h1>
    <form action="{{ route('tecnicos.update', $tecnico->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $tecnico->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="especialidad">Especialidad</label>
            <input type="text" class="form-control" id="especialidad" name="especialidad" value="{{ $tecnico->especialidad }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection

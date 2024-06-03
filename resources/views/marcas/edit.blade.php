@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Marca</h1>
    <form action="{{ route('marcas.update', $marca->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $marca->nombre }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection

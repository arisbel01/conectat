@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Paquete de Internet</h1>

    <form method="POST" action="{{ route('paquetes.store') }}">
        @csrf
        <div class="form-group">
            <label for="nombre_paquete">Nombre del Paquete</label>
            <input type="text" name="nombre_paquete" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" name="precio" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="caracteristicas_paquete">Características</label>
            <input type="text" name="caracteristicas_paquete" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="velocidad_paquete">Velocidad</label>
            <input type="text" name="velocidad_paquete" class="form-control" required>
        </div>
        <div class="form-group">
    <label for="fk_promocion">Promoción</label>
    <select name="fk_promocion" class="form-control" required>
        @foreach($promociones as $promocion)
            <option value="{{ $promocion->id_promocion }}">{{ $promocion->promocion }}</option>
        @endforeach
    </select>
</div>

        <button type="submit" class="btn btn-primary">Agregar Paquete</button>
    </form>
</div>
@endsection

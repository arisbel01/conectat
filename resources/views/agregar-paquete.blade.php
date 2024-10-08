<!DOCTYPE html>
<html lang="en"></html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    
</head>
<body>

<div class="container">
    <h1>Agregar Paquete de Internet</h1>

    <form method="POST" action="/agregar-paquete">
        
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

</body>
</html>

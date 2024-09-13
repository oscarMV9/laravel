<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver</title>
</head>
<body>
    <div class="container">
        <h1>Detalle de Producción</h1>
        <div class="card">
            <div class="card-header">
                Producción ID: {{ $produccion->id_producto }}
            </div>
            <div class="card-body">
                <p><strong>Nombre del Producto:</strong> {{ $produccion->nombre_producto }}</p>
                <p><strong>Talla:</strong> {{ $produccion->talla }}</p>
                <p><strong>Color:</strong> {{ $produccion->color }}</p>
                <p><strong>Cantidad por hacer: </strong> {{ $produccion->cantidad }}</p>
                <p><strong>Fecha de Producción:</strong> {{ $produccion->fecha_produccion }}</p>
                <p><strong>Fecha de Fin de Producción:</strong> {{ $produccion->fecha_fin_produccion }}</p>
                <p><strong>Estado:</strong> {{ $produccion->estado }}</p>
                <p><strong>ID del Encargado:</strong> {{ $produccion->id_encargado }}</p>
                <p><strong>Nombre del Encargado:</strong> {{ $produccion->nombre_encargado }}</p>
                <p><strong>Apellido del Encargado:</strong> {{ $produccion->apellido_encargado }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('produccion.index') }}" class="btn btn-primary">Volver</a>
                <a href="{{ route('produccion.edit', $produccion->id_producto) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('produccion.destroy', $produccion->id_producto) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
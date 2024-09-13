<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background: url('/imagenes/casa.jpg') no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    margin: 0;
    padding: 20px;
    color: #333;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    backdrop-filter: blur(10px);
    border: 2px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 2rem;
    color: #007bff;
    margin-bottom: 20px;
    text-align: center;
    border-bottom: 2px solid #007bff;
    padding-bottom: 10px;
}

.card {
    border: 1px solid #dee2e6;
    border-radius: 8px;
    overflow: hidden;
    background-color: #fff;
}

.card-header {
    background-color: #007bff;
    color: white;
    padding: 15px;
    font-size: 1.25rem;
    font-weight: bold;
    text-align: center;
}

.card-body {
    padding: 20px;
}

.card-body p {
    font-size: 1rem;
    line-height: 1.5;
    margin-bottom: 10px;
}

.card-body strong {
    color: #495057;
}

.card-footer {
    padding: 15px;
    background-color: #f1f3f5;
    text-align: center;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    margin: 5px;
    font-size: 1rem;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn-primary {
    background-color: #007bff;
    color: white;
    border: none;
}

.btn-warning {
    background-color: #ffc107;
    color: white;
    border: none;
}

.btn-danger {
    background-color: #dc3545;
    color: white;
    border: none;
}

.btn:hover {
    opacity: 0.9;
    cursor: pointer;
}

form.d-inline {
    display: inline;
}

</style>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDF</title>
</head>
<style>
    body {
    font-family: sans-serif; 
    margin: 20px; 
    background-repeat: no-repeat;
    background-size: cover;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.tabla {
    width: 10%;
    border-collapse: collapse; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
}

.cabezera {
    background-color: #f0f0f0;
}

.cabezera th {
    padding: 12px;
    text-align: left;
    font-weight: bold;
}

.text {
    font-weight: bold;
}

tbody tr:nth-child(even) {
    background-color: #f5f5f5;
}

tbody td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}
</style>
<body>
    <h1>Produccion</h1>
    <table class="tabla">
        <thead class="cabezera">
            <tr>
                <th>ID</th>
                <th>Nombre del Producto</th>
                <th>Talla</th>
                <th>Color</th>
                <th>Cantidad</th>
                <th>Fecha de Producción</th>
                <th>Fecha de Fin de Producción</th>
                <th>Estado</th>
                <th>ID encargado</th>
                <th>Encargado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produccion as $produccion)
            <tr>
                <td>{{ $produccion->id_producto }}</td>
                <td>{{ $produccion->nombre_producto }}</td>
                <td>{{ $produccion->talla }}</td>
                <td>{{ $produccion->color }}</td>
                <td>{{ $produccion->cantidad }}</td>
                <td>{{ $produccion->fecha_produccion }}</td>
                <td>{{ $produccion->fecha_fin_produccion }}</td>
                <td>{{ $produccion->estado }}</td>
                <td>{{ $produccion->id_encargado}}</td>
                <td>{{ $produccion->nombre_encargado }} {{ $produccion->apellido_encargado }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    
</body>
</html>
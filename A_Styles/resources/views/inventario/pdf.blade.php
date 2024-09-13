<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    width: 100%;
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
    <h1>Inventario</h1> <br>
    <table class="tabla">
        <thead class="cabezera">
            <tr>
                <th class="text">ID</th>
                <th class="text">Nombre</th>
                <th class="text">Descripción</th>
                <th class="text">Cantidades</th>
                <th class="text">Talla</th>
                <th class="text">Color</th>
                <th class="text">Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventario as $Inventario)
            <tr>
                <td>{{$Inventario->id}}</td>
                <td>{{ $Inventario->nombre}}</td>
                <td>{{ $Inventario->descripcion}}</td>
                <td>{{ $Inventario->cantidades}}</td>
                <td>{{ $Inventario->talla}}</td>
                <td>{{ $Inventario->color}}</td>
                <td>{{ $Inventario->precio}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
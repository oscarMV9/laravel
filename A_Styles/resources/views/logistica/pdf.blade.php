<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <h1>Logistica</h1>
    <table class="tabla">
        <thead class="cabezera">
            <tr>
                <th>Identificacion cliente</th>
                <th>Nombre cliente</th>
                <th>Transportista</th>
                <th>Estado del Envío</th>
                <th>Fecha de Envío</th>
                <th>Fecha de Recibido</th>
                <th>Nota</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logistica as $logistica)
                <tr>
                    <td>{{ $logistica->cliente->identificacion }}</td>
                    <td>{{ $logistica->cliente->nombre }} {{ $logistica->cliente->apellido }}</td>
                    <td>{{ $logistica->nombre_transportista }}</td>
                    <td>{{ $logistica->estado_envio }}</td>
                    <td>{{ $logistica->fecha_envio }}</td>
                    <td>{{ $logistica->fecha_recibido }}</td>
                    <td>{{ $logistica->nota }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
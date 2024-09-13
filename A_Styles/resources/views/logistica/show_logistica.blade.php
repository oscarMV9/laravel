<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style_show_cliente.css') }}">
    <title>VER</title>
</head>
<body>
<div class="cliente-info">
    <p><strong>Cliente:</strong> {{ $logistica->cliente->identificacion }}</p>
    <p><strong>Cliente:</strong> {{ $logistica->cliente->nombre }} {{ $logistica->cliente->apellido }}</p>
    <p><strong>ID del Transportista:</strong> {{ $logistica->id_transportista }}</p>
    <p><strong>Nombre del Transportista:</strong> {{ $logistica->nombre_transportista }}</p>
    <p><strong>Estado del Envío:</strong> {{ $logistica->estado_envio }}</p>
    <p><strong>Fecha de Envío:</strong> {{ $logistica->fecha_envio }}</p>
    <p><strong>Fecha de Recibido:</strong> {{ $logistica->fecha_recibido }}</p>
    <p><strong>Nota:</strong> {{ $logistica->nota }}</p>
    <a href="{{ route('logisticas.index') }}" class="back-link">Volver</a>
</div>
</body>
</html>
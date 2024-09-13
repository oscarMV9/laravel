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
    <p><strong>Identificacion:</strong> {{ $cliente->identificacion}}</p>
    <p><strong>Nombre:</strong> {{ $cliente->nombre }}</p>
    <p><strong>Apellido:</strong> {{ $cliente->apellido }}</p>
    <p><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
    <p><strong>Dirección:</strong> {{ $cliente->direccion }}</p>
    <p><strong>Prenda Comprada:</strong> {{ $cliente->prenda_comprada }}</p>
    <a href="{{ route('clientes.index') }}" class="back-link">Volver</a>
    </div>
</body>
</html>
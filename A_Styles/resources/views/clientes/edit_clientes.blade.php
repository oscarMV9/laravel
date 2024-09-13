<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style_form_clientes.css') }}">
    <link>
    <title>Editar</title>
</head>
<body>
    <div class="form-container">
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="identificacion">Identificacion:</label>
        <input type="text" name="identificacion" id="identificacion" value="{{ $cliente->identificacion }}">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $cliente->nombre }}" oninput="this.value = this.value.toUpperCase()">
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" value="{{ $cliente->apellido }}" oninput="this.value = this.value.toUpperCase()">
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono" value="{{ $cliente->telefono }}">
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" value="{{ $cliente->direccion }}" oninput="this.value = this.value.toUpperCase()">
        <label for="prenda_comprada">Prenda Comprada:</label>
        <input type="text" name="prenda_comprada" id="prenda_comprada" value="{{ $cliente->prenda_comprada }}" oninput="this.value = this.value.toUpperCase()">
        <button type="submit">Actualizar</button>
    </form>
    </div>
</body>
</html>
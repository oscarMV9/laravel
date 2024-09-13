<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style_form_clientes.css') }}">
    <title>Crear Cliente</title>
</head>
<body>
    <div class="form-container">
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf

            @if($errors->any())
                <div class="errors">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        <div class="input-box">
            <label for="identificacion">Identificación:</label>
            <input type="text" id="identificacion" name="identificacion" class="identificacion" required>
        </div>
        <div class="input-box">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="nombre" oninput="this.value = this.value.toUpperCase()" required>
        </div>
        <div class="input-box">
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" class="apellido" oninput="this.value = this.value.toUpperCase()" required>
        </div>
        <div class="input-box">
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" class="telefono">
        </div>
        <div class="input-box">
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" class="direccion" oninput="this.value = this.value.toUpperCase()">
        <div class="input-box">
            <label for="prenda_comprada">Prenda Comprada:</label>
            <input type="text" id="prenda_comprada" name="prenda_comprada" class="prenda_comprada" oninput="this.value = this.value.toUpperCase()">
        </div>
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>

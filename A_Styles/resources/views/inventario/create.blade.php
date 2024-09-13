<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/formInv.css') }}">
    <title>CREAR</title>
</head>
<body>
    <div class="wrapper">
        <form action={{ route('inventario.store') }} method="post" enctype="multipart/form-data">
        @csrf
            <h1>crear producto</h1>
        <div class="input-box">
            <input type="text" name="nombre" placeholder="Nombre" oninput="this.value = this.value.toUpperCase()">
        </div>
        <div class="input-box">
            <input type="text" name="descripcion" placeholder="Descripcion">
        </div>
        <div class="input-box">
            <input type="integer" class="cantidades" name="cantidades" required placeholder="Cantidades">
        </div>
        <div class="input-box">
            <input type="text" name="talla" placeholder="Talla" oninput="this.value = this.value.toUpperCase()">
        </div>
        <div class="input-box">
            <input type="text" name="color" placeholder="Color" oninput="this.value = this.value.toUpperCase()">
        </div>
        <div class="input-box">
            <input type="number" class="precio" name="precio" placeholder="Precio">
        </div>
            <button type="submit" class="Btn">Guardar</button>
        </form>
        <div class="register-link">
            <a href="{{ route('inventario.index') }}">Volver</a>
        </div>
    </div>
</body>
</html>
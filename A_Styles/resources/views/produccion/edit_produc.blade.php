<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
    <style>
body {
    font-family: 'Poppins', sans-serif;
    background: url('/imagenes/casa.jpg') no-repeat;
    background-size: cover;
	background-position: center;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.wrapper {
    width: 100%;
    max-width: 600px;
    padding: 30px;
    backdrop-filter: blur(10px);
    border: solid 2px #ccc;
    border-radius: 12px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    text-align: center;
    margin: 20px;
    box-sizing: border-box;
}

h1 {
    font-size: 35px;
    margin-bottom: 20px;
    color: #333;
    letter-spacing: 1.5px;
}

.form-control {
    width: 100%;
    padding: 12px 15px;
    border: 2px solid #ddd;
    border-radius: 8px;
    margin-bottom: 20px;
    font-size: 16px;
    background-color: #f9f9f9;
    transition: all 0.3s ease;
}

.form-control:focus {
    border-color: #666;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
    outline: none;
}

label {
    font-size: 14px;
    font-weight: 600;
    color: #ffffff;
    display: block;
    text-align: left;
    margin-bottom: 8px;
}

.input-box {
    position: relative;
    width: 90%;
}

.Btn {
    background-color: #5a67d8;
    color: white;
    padding: 12px 25px;
    font-size: 16px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 10px;
    width: 100%;
}

.Btn:hover {
    background-color: #4c51bf;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    transform: translateY(-2px);
}

.Btn:active {
    transform: translateY(0px);
}

@media (max-width: 768px) {
    .wrapper {
        width: 100%;
        padding: 20px;
        margin: 10px;
    }
    
    .form-control {
        padding: 10px;
    }
    
    .Btn {
        width: 100%;
        padding: 14px;
    }
}
    </style>
</head>
<body>
    <div class="wrapper">
        <h1>Editar</h1>
        <form action="{{ route('produccion.update', $produccion->id_producto) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="input-box">
                <label for="nombre_producto">Nombre del Producto:</label>
                <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" value="{{ $produccion->nombre_producto }}" required>
            </div>
            <div class="input-box">
                <label for="talla">Talla:</label>
                <input type="text" class="form-control" id="talla" name="talla" value="{{ $produccion->talla }}" required>
            </div>
            <div class="input-box">
                <label for="color">Color:</label>
                <input type="text" class="form-control" id="color" name="color" value="{{ $produccion->color }}" required>
            </div>
            <div class="input-box">
                <label for="cantidad">Cantidad:</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ $produccion->cantidad }}" required>
            </div>
            <div class="input-box">
                <label for="fecha_produccion">Fecha de Producción:</label>
                <input type="date" class="form-control" id="fecha_produccion" name="fecha_produccion" value="{{ $produccion->fecha_produccion }}" required>
            </div>
            <div class="input-box">
                <label for="fecha_fin_produccion">Fecha de Fin de Producción:</label>
                <input type="date" class="form-control" id="fecha_fin_produccion" name="fecha_fin_produccion" value="{{ $produccion->fecha_fin_produccion }}">
            </div>
            <div class="input-box">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" value="{{ $produccion->estado }}" required>
            </div>
            <div class="input-box">
                <label for="id_encargado">ID del Encargado:</label>
                <input type="number" class="form-control" id="id_encargado" name="id_encargado" value="{{ $produccion->id_encargado }}" required>
            </div>
            <div class="input-box">
                <label for="nombre_encargado">Nombre del Encargado:</label>
                <input type="text" class="form-control" id="nombre_encargado" name="nombre_encargado" value="{{ $produccion->nombre_encargado }}" required>
            </div>
            <div class="input-box">
                <label for="apellido_encargado">Apellido del Encargado:</label>
                <input type="text" class="form-control" id="apellido_encargado" name="apellido_encargado" value="{{ $produccion->apellido_encargado }}" required>
            </div>
            <button type="submit" class="Btn">Actualizar</button>

        </form>
    </div>
</body>
</html>
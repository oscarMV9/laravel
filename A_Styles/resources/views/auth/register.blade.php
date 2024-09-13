<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/styleR.css') }}">
</head>
<body>
    <body>
        <div class="fondo">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <h1>Registro</h1>
                <div class="formulario">
                    <input type="text" name="name" placeholder="Nombre" required>
                </div>
                <div class="formulario">
                    <input type="text" name="lastname" placeholder="Apellido" required>
                </div>
                <div class="formulario">
                    <input type="email" name="email" placeholder="Correo Electrónico" required>
                </div>
                <div class="formulario">
                    <input type="password" name="password" placeholder="Contraseña" required>
                </div>
                <div class="formulario">
                    <input type="password" name="password_confirmation" placeholder="Repite Contraseña" required>
                </div>
                <button type="submit" class="boton">Registrarse</button>
                <div class="opcion-login">
                    <p>¿Ya tienes una cuenta? <a href="{{ url('/inicio_s') }}">Iniciar Sesión</a></p>
                </div>
            </form>
        </div>
    </body>
</body>
</html>
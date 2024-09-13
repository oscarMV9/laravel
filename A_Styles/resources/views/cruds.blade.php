<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUDS</title>
    <link rel="stylesheet" href="formInv.css">
</head>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
        display: flex;
        background: url('../imagenes/casa.jpg') no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        flex-direction: column;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .barra_navegacion{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 10vh;
        }

        .nav{
            position: fixed;
            top: 0;
            display: flex;
            justify-content: space-around;
            width: 100%;
            height: 100px;
            line-height: 100px;
            background: linear-gradient(rgba(39, 39, 39, 0.6), transparent);
            z-index: 100;
        }

        .navegacion_menu ul{
            display: flex;
        }

        .navegacion_menu ul li{
            list-style-type: none;
        }

        .navegacion_menu ul li .link{
            text-decoration: none;
            font-weight: 500;
            color: #fff;
            padding-bottom: 15px;
            margin: 0 25px;
        }

        .link:hover, active{
            border-bottom: 2px solid #fff;
        }
        .navegacion_menu a:hover,
        .navegacion_menu a:active {
            color: white;
        }

    .logo img {
        height: 50px;
        border-radius: 34px;
        border: 4px solid;
    }
    .container {
        margin-top: 15%;
        align-items: center;
        background-color: transparent;
        backdrop-filter: blur(10px);
        padding: 30px 40px;
        border: solid 4px #ccc;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .formulario_cruds {
        text-align: center;
    }

    .formulario_cruds h1 {
        font-size: 32px;
        margin-bottom: 20px;
        color: #333;
    }

    .formulario_cruds p {
        margin: 10px 0;
    }

    .link {
        text-decoration: none;
        color: #1c2b35;
        font-size: 20px;
        padding: 10px 15px;
        border-radius: 6px;
        transition: background 0.3s ease, color 0.3s ease;
    }

    .link:hover {
        color: #fff;
    }

    .link:active {
        color: #fff;
    }
</style>
<body>
    <div class="barra_navegacion">
        <nav class="nav">
            <div class="logo">
                <p><img src="../imagenes/logo.jpg" class="imagen_logo"></p>
            </div>
            <div class="navegacion_menu">
                <ul>
                    <li><a href="{{ route('logout') }}" class="link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"active>CERRAR SESION</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>
    <div class="container">
        <form class="formulario_cruds">
            <h1>Selección de CRUDS</h1>
            <p><a href="{{ url('/inventario') }}" class="link" active>Inventario</a></p>
            <p><a href="{{ url('/logisticas') }}" class="link" active>Logisticas</a></p>
            <p><a href="{{ url('/produccion') }}" class="link" active>Producción</a></p>
            <p><a href="{{ url('/ventas') }}" class="link" active>Ventas</a></p>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            display: flex;
            background: url('../imagenes/casa.jpg') no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .barra_navegacion {
            width: 100%;
            background: transparent;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }
        .logo img {
            height: 50px;
        }
        .navegacion_menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
        }
        .navegacion_menu li {
            margin-left: 20px;
        }
        .navegacion_menu .link {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            padding: 10px 15px;
            border-radius: 6px;
            transition: background 0.3s ease;
        }
        .navegacion_menu .link:hover {
            background: rgba(0, 0, 0, 0.1);
        }
        .container {
            margin-top: 80px;
            width: 90%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .tabla {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .tabla th, .tabla td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
        .tabla th {
            background: rgba(0, 0, 0, 0.1);
            color: #333;
        }
        .tabla tr:nth-child(even) {
            background: rgba(0, 0, 0, 0.05);
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px 0;
            border: none;
            border-radius: 6px;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            color: #fff;
        }
        .btn-warning {
            background: #f39c12;
        }
        .btn-warning:hover {
            background: #e67e22;
            transform: translateY(-2px);
        }
        .btn-danger {
            background: #e74c3c;
        }
        .btn-danger:hover {
            background: #c0392b;
            transform: translateY(-2px);
        }
        .action-buttons .btn {
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <div class="barra_navegacion">
        <nav class="nav">
            <div class="logo">
                <p><img src="../imagenes/logo.jpg" class="imagen_logo"></p>
            </div>
            <div class="navegacion_menu">
                <ul>
                    <li><a href="{{url('/cruds')}}" class="link">CRUDS</li>
                    <li><a href="{{ route('logout') }}" class="link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" active>CERRAR SESION</a></li>
                    <li><a href="{{url('inventario/create')}}" class="link">Nuevo Producto</a></li>
                    <li><a href="{{route('Inventario.pdf')}}" class="link">REPORTE</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>
    <div class="container">
        <h1>Inventario</h1>
        <table class="tabla">
            <thead>
                <tr>
                    <th class="text">ID</th>
                    <th class="text">Nombre</th>
                    <th class="text">Descripción</th>
                    <th class="text">Cantidades</th>
                    <th class="text">Talla</th>
                    <th class="text">Color</th>
                    <th class="text">Precio</th>
                    <th class="text">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inventarios as $Inventario)
                <tr>
                    <td>{{$Inventario->id}}</td>
                    <td>{{ $Inventario->nombre}}</td>
                    <td>{{ $Inventario->descripcion}}</td>
                    <td>{{ $Inventario->cantidades}}</td>
                    <td>{{ $Inventario->talla}}</td>
                    <td>{{ $Inventario->color}}</td>
                    <td>{{ $Inventario->precio}}</td>
                    <td>
                        <div class="action-buttons">
                            <a href="{{ route('inventario.edit', $Inventario->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('inventario.destroy', $Inventario->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

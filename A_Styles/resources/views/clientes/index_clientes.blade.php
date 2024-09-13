<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CLIENTES</title>
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
        .container {
            background: transparent;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            border: solid 2px #ffffff;
            backdrop-filter: blur(10px);
            width: 90%;
            max-width: 1200px;
            margin-top: 120px;
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
            border-radius: 34px;
            border: 4px solid;
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
        h1 {
            color: #ffffff;
            margin-bottom: 25px;
            text-align: center;
            font-size: 28px;
            letter-spacing: 1px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-bottom: 20px;
            border: none;
            border-radius: 6px;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .btn-primary {
            background: #3498db;
            color: #fff;
        }
        .btn-primary:hover {
            background: #2980b9;
            transform: translateY(-2px);
        }
        .btn-info {
            background: #1abc9c;
            color: #fff;
        }
        .btn-info:hover {
            background: #16a085;
            transform: translateY(-2px);
        }
        .btn-warning {
            background: #f39c12;
            color: #fff;
        }
        .btn-warning:hover {
            background: #e67e22;
            transform: translateY(-2px);
        }
        .btn-danger {
            background: #e74c3c;
            color: #fff;
        }
        .btn-danger:hover {
            background: #c0392b;
            transform: translateY(-2px);
        }
        .tabla {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            overflow: hidden;
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
        .tabla-striped tbody tr:nth-of-type(odd) {
            background: rgba(0, 0, 0, 0.03);
        }
        .mt-3 {
            margin-top: 1rem;
        }
        .d-inline {
            display: inline;
        }
        .crear_produc {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 0;
            border-radius: 6px;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            color: #fff;
            background: #3498db;
            transition: all 0.3s ease;
        }
        .crear_produc:hover {
            background: #2980b9;
            transform: translateY(-2px);
        }
        .action-buttons .btn {
            margin: 5px 0;
        }
        .action-buttons .btn.view {
            background: #1abc9c;
        }
        .action-buttons .btn.edit {
            background: #f39c12;
        }
        .action-buttons .btn.delete {
            background: #e74c3c;
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
                    <li><a href="{{ route('logout') }}" class="link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" active>CERRAR SESION</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>
    <div class="container">
        <h1>Clientes</h1>
        <div>
            <a class="crear_produc" href="{{ route('clientes.create') }}">Agregar Cliente</a>
            <a class="crear_produc" href="{{url('/logisticas')}}">Ver envíos</a>
        </div>
        <div class="tabla">
            <table>
                <thead>
                    <tr>
                        <th>Identificación</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Prenda Comprada</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->identificacion }}</td>
                            <td>{{ $cliente->nombre }}</td>
                            <td>{{ $cliente->apellido }}</td>
                            <td>{{ $cliente->telefono }}</td>
                            <td>{{ $cliente->direccion }}</td>
                            <td>{{ $cliente->prenda_comprada }}</td>
                            <td>
                                <div class="action-buttons">
                                    <a href="{{ route('clientes.show', $cliente->id) }}" class="btn view">Ver</a>
                                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn edit">Editar</a>
                                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn delete">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

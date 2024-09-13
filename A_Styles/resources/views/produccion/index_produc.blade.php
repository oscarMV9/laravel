<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produccion</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            display: flex;
            justify-content: center;
            background: url('../imagenes/casa.jpg') no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .barra_navegacion {
            width: 100%;
            background:linear-gradient(rgba(39, 39, 39, 0.6), transparent);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
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

        .container {
            background: rgba(241, 225, 225, 0);
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border: solid 2px #ffffff;
            backdrop-filter: blur(10px);
            border-radius: 12px;
            width: 80%;
            max-width: 1200px;
            margin-top: 110px;
        }
        h1 {
            color: #f1efef;
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
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            overflow: hidden;
        }
        .table th, .table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
        .table th {
            background: rgba(0, 0, 0, 0.1);
            color: #333;
        }
        .table tr:nth-child(even) {
            background: rgba(0, 0, 0, 0.05);
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background: rgba(0, 0, 0, 0.03);
        }
        .mt-3 {
            margin-top: 1rem;
        }
        .d-inline {
            display: inline;
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
                    <li><a href="{{url('/cruds')}}" class="link">CRUDS</li>
                    <li><a href="{{route('Logisticas.pdf')}}" class="link">REPORTE</a></li>
				</ul>
			</div>
		</nav>
	</div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>
    <div class="container">
        <h1>Produccion</h1>
        <a href="{{ route('produccion.create') }}" class="btn btn-primary">Nueva Produccion</a>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Producto</th>
                    <th>Talla</th>
                    <th>Color</th>
                    <th>Cantidad</th>
                    <th>Fecha de Producción</th>
                    <th>Fecha de Fin de Producción</th>
                    <th>Estado</th>
                    <th>ID encargado</th>
                    <th>Encargado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($producciones as $produccion)
                <tr>
                    <td>{{ $produccion->id_producto }}</td>
                    <td>{{ $produccion->nombre_producto }}</td>
                    <td>{{ $produccion->talla }}</td>
                    <td>{{ $produccion->color }}</td>
                    <td>{{ $produccion->cantidad }}</td>
                    <td>{{ $produccion->fecha_produccion }}</td>
                    <td>{{ $produccion->fecha_fin_produccion }}</td>
                    <td>{{ $produccion->estado }}</td>
                    <td>{{ $produccion->id_encargado}}</td>
                    <td>{{ $produccion->nombre_encargado }} {{ $produccion->apellido_encargado }}</td>
                    <td>
                        <a href="{{ route('produccion.show', $produccion->id_producto) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('produccion.edit', $produccion->id_producto) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('produccion.destroy', $produccion->id_producto) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
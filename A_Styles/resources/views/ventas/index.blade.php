<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Si tienes un archivo CSS -->
</head>
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
        .container {
            margin-top: 80px;
            width: 90%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        td a {
    display: inline-block;
    padding: 8px 12px;
    margin: 0 5px;
    font-size: 1rem;
    color: #007bff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

td a:hover {
    background-color: #007bff;
    color: #ffffff;
}


td button {
    padding: 8px 12px;
    font-size: 1rem;
    color: #ffffff;
    background-color: #dc3545;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

td button:hover {
    background-color: #c82333;
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
					<li><a href="{{ route('logout') }}" class="link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" active>CERRAR SESION</a></li>
                    <li><a href="{{url('/cruds')}}" class="link">CRUDS</li>
                    <li><a href="{{route('ventas.pdf')}}" class="link">REPORTE</a></li>
                    <li><a href="{{ route('ventas.create') }}" class="link">Nueva Venta</a></li>
				</ul>
			</div>
		</nav>
	</div>
    <div class="container">
    <h1>Ventas</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="tabla">
        <thead>
            <tr>
                <th>ID</th>
                <th>Documento Cliente</th>
                <th>Nombre Cliente</th>
                <th>Apellido Cliente</th>
                <th>Prenda</th>
                <th>Cantidad Comprada</th>
                <th>Precio Unitario</th>
                <th>Precio Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
                <tr>
                    <td>{{ $venta->id }}</td>
                    <td>{{ $venta->documento_cliente }}</td>
                    <td>{{ $venta->nombre_cliente }}</td>
                    <td>{{ $venta->apellido_cliente }}</td>
                    <td>{{ $venta->inventario->nombre }}</td>
                    <td>{{ $venta->cantidades_c }}</td>
                    <td>{{ $venta->precio_unitario }}</td>
                    <td>{{ $venta->precio_total }}</td>
                    <td>
                        <form action="{{ route('ventas.destroy', $venta->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>
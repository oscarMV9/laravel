<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDF</title>
</head>
<body>
    <table>
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
            </tr>
        </thead>
        <tbody>
            @foreach($venta as $venta)
                <tr>
                    <td>{{ $venta->id }}</td>
                    <td>{{ $venta->documento_cliente }}</td>
                    <td>{{ $venta->nombre_cliente }}</td>
                    <td>{{ $venta->apellido_cliente }}</td>
                    <td>{{ $venta->inventario->nombre }}</td>
                    <td>{{ $venta->cantidades_c}}</td>
                    <td>{{ $venta->precio_unitario }}</td>
                    <td>{{ $venta->precio_total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
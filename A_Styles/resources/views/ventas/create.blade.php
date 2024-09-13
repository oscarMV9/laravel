<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear venta</title>
</head>
<body>
    <div class="form-container">
        <h1>Crear Venta</h1>
        <form action="{{ route('ventas.store') }}" method="POST">
            @csrf

            <label for="documento_cliente">Documento del Cliente:</label>
            <input type="text" name="documento_cliente" id="documento_cliente" value="{{ old('documento_cliente') }}" required>

            <label for="nombre_cliente">Nombre del Cliente:</label>
            <input type="text" name="nombre_cliente" id="nombre_cliente" value="{{ old('nombre_cliente') }}" required oninput="this.value = this.value.toUpperCase()">

            <label for="apellido_cliente">Apellido del Cliente:</label>
            <input type="text" name="apellido_cliente" id="apellido_cliente" value="{{ old('apellido_cliente') }}" required oninput="this.value = this.value.toUpperCase()">

            <label for="inventario_id">Selecciona la Prenda:</label>
            <select name="inventario_id" id="inventario_id" required>
                <option value="">Selecciona una prenda</option>
                @foreach($inventarios as $inventario)
                    <option value="{{ $inventario->id }}" data-precio="{{ $inventario->precio }}">
                        {{ $inventario->nombre }} - {{ $inventario->talla }} - {{ $inventario->color }}
                    </option>
                @endforeach
            </select>

            <label for="cantidad_comprada">Cantidad Comprada:</label>
            <input type="number" name="cantidad_comprada" id="cantidad_comprada" value="{{ old('cantidad_comprada') }}" min="1" required>

            <button type="submit">Guardar Venta</button>
        </form>

        <!-- Mensajes de error o éxito -->
        @if($errors->any())
            <div class="errors">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <script>
        document.getElementById('inventario_id').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var precio = selectedOption.getAttribute('data-precio');
            var cantidadInput = document.getElementById('cantidad_comprada');
            var totalPrecio = document.getElementById('total_precio');
            
            document.getElementById('precio_unitario').value = precio;
            
            cantidadInput.addEventListener('input', function() {
                var cantidad = parseInt(cantidadInput.value);
                var precioUnitario = parseFloat(precio);
                var total = cantidad * precioUnitario;
                totalPrecio.value = total.toFixed(2);
            });
        });
    </script>
</body>
</html>
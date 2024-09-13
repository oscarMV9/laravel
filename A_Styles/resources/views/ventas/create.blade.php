<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear venta</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-image: url(../imagenes/IMG.jpg); 
    background-size: cover;
    background-position: center;
    margin: 0;
    padding: 20px;
    color: #333;
}

.form-container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    backdrop-filter: blur(10px);
    border: solid 2px #ccc;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 1.8rem;
    margin-bottom: 20px;
    color: #007bff;
    text-align: center;
    border-bottom: 2px solid #007bff;
    padding-bottom: 10px;
}

label {
    display: block;
    font-size: 1rem;
    margin-bottom: 8px;
    color: #353738;
}

input[type="text"],
input[type="number"],
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="text"]:focus,
input[type="number"]:focus,
select:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
}

button {
    width: 100%;
    padding: 10px;
    font-size: 1.2rem;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #218838;
}

.errors {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 20px;
}

.errors ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 20px;
}

@media (max-width: 600px) {
    .form-container {
        padding: 15px;
    }

    h1 {
        font-size: 1.5rem;
    }

    button {
        font-size: 1rem;
    }
}

</style>
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
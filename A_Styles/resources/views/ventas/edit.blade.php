<div class="container">
    <h2>Editar Venta</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('ventas.update', $ventas->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="documento_cliente">Documento del Cliente</label>
            <input type="number" name="documento_cliente" class="form-control" value="{{ $venta->documento_cliente }}" required>
        </div>

        <div class="form-group">
            <label for="nombre_cliente">Nombre del Cliente</label>
            <input type="text" name="nombre_cliente" class="form-control" value="{{ $venta->nombre_cliente }}" required>
        </div>

        <div class="form-group">
            <label for="apellido_cliente">Apellido del Cliente</label>
            <input type="text" name="apellido_cliente" class="form-control" value="{{ $venta->apellido_cliente }}" required>
        </div>

        <div class="form-group">
            <label for="inventario_id">Prenda</label>
            <select name="inventario_id" class="form-control" required>
                @foreach($inventarios as $inventario)
                    <option value="{{ $inventario->id }}" {{ $venta->inventario_id == $inventario->id ? 'selected' : '' }}>
                        {{ $inventario->nombre_producto }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="cantidad_comprada">Cantidad Comprada</label>
            <input type="number" name="cantidad_comprada" class="form-control" value="{{ $venta->cantidad_comprada }}" required>
        </div>

        <div class="form-group">
            <label for="precio_unitario">Precio Unitario</label>
            <input type="number" name="precio_unitario" class="form-control" value="{{ $venta->precio_unitario }}" required readonly>
        </div>

        <div class="form-group">
            <label for="precio_total">Precio Total</label>
            <input type="number" name="precio_total" class="form-control" value="{{ $venta->precio_total }}" required readonly>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Venta</button>
        <a href="{{ route('ventas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
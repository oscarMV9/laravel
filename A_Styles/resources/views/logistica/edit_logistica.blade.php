<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style_form_logistica.css') }}">
    <title>Editar</title>
</head>
<body>
    <style>
        .volver {
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px !important;
  color: #fff !important;
  background-color: #4CAF50 !important;
  text-align: center;
  margin-left: 100px;
  margin-top: 10px;
  text-decoration: none !important;
  border-radius: 5px !important;
  transition: background-color 0.3s !important;
}

.volver:hover {
  background-color: #45a049 !important;
}

  </style>
    <form action="{{ route('logisticas.update', $logistica->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="cliente_id">Identificacion cliente:</label>
        <select name="cliente_id" id="cliente_id">
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}" {{ $logistica->cliente_id == $cliente->id ? 'selected' : '' }}>
                    {{ $cliente->identificacion }}
                </option>
            @endforeach
        </select>
        <label for="cliente_id">Nombre cliente:</label>
        <select name="cliente_id" id="cliente_id">
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}" {{ $logistica->cliente_id == $cliente->id ? 'selected' : '' }}>
                    {{ $cliente->nombre }} {{ $cliente->apellido }}
                </option>
            @endforeach
        </select>
        <label for="id_transportista">ID del Transportista:</label>
        <input type="number" name="id_transportista" id="id_transportista" value="{{ $logistica->id_transportista }}" oninput="this.value = this.value.toUpperCase()">
        <label for="nombre_transportista">Nombre del Transportista:</label>
        <input type="text" name="nombre_transportista" id="nombre_transportista" value="{{ $logistica->nombre_transportista }}" oninput="this.value = this.value.toUpperCase()">
        <label for="estado_envio">Estado del Envío:</label>
        <input type="text" name="estado_envio" id="estado_envio" value="{{ $logistica->estado_envio }}" oninput="this.value = this.value.toUpperCase()">
        <label for="fecha_envio">Fecha de Envío:</label>
        <input type="date" name="fecha_envio" id="fecha_envio" value="{{ $logistica->fecha_envio }}">
        <label for="fecha_recibido">Fecha de Recibido:</label>
        <input type="date" name="fecha_recibido" id="fecha_recibido" value="{{ $logistica->fecha_recibido }}">
        <label for="nota">Nota:</label>
        <textarea name="nota" id="nota">{{ $logistica->nota }}</textarea>
        <button type="submit">Actualizar</button>
        <a  class="volver" href="{{ url('/logisticas') }}">volver</a>
    </form>
</body>
</html>
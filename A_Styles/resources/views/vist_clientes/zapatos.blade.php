<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styleZapatosClientes.css') }}">
    <title>Zapatos</title>
</head>
<body>
	<div class="container">
        <div class="sidebar">
            <ul>
				<li><img src="{{'../imagenes/logo.jpg'}}" class="imagen_logo"></li>
                <li><a href="{{url('/')}}">INICIO</a></li>
                <li><a href="{{url('/zapatos')}}">ZAPATOS</a></li>
                <li><a href="{{url('/conjuntos')}}">CONJUNTOS</a></li>
                <li><a href="{{url('/adultos')}}">ADULTOS</a></li>
                <li><a href="{{url('/niños')}}">NIÑOS</a></li>
            </ul>
        </div>
    </div>
    <div class="div_zapatos_mujer">
		<div class="contenido_zapatos_mujer">
			<p class="titulo_zapatos_mujer">zapatos mujer</p>
			<img src="../imagenes/zapatos_mujer.jpg" class="imagen_zapatos_mujer">
			<p><button type="submit" class="ver_zapatos_mujer" onclick="redireccion_5()">IR!</button></p>
		</div>
	</div>
    <div class="div_zapatos_hombre">
		<div class="contenido_zapatos_hombre">
			<p class="titulo_zapatos_hombre">zapatos hombre</p>
			<img src="../imagenes/zapatos_hombre.jpg" class="imagen_zapatos_hombre">
			<p><button type="submit" class="ver_zapatos_hombre" onclick="redireccion_5()">IR!</button></p>
		</div>
	</div>
    <div class="div_zapatos_niño">
		<div class="contenido_zapatos_niño">
			<p class="titulo_zapatos_niño">zapatos niños</p>
			<img src="../imagenes/zapatos_niños.jpg" class="imagen_zapatos">
			<p><button type="submit" class="ver_zapatos_niño" onclick="redireccion_5()">IR!</button></p>
		</div>
	</div>
    <div class="div_zapatos_joven">
		<div class="contenido_zapatos_joven">
			<p class="titulo_zapatos_joven">zapatos joven</p>
			<img src="../imagenes/zapatos_joven.jpg" class="imagen_zapatos_joven">
			<p><button type="submit" class="ver_zapatos_joven" onclick="redireccion_5()">IR!</button></p>
		</div>
	</div>
</body>
</html>
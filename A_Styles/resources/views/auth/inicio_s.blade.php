<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio de Sesión</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styleIni.css') }}">
</head>
<body>
	<div class="wrapper">
		<form action="{{ route('login') }}" method="post">
			@csrf
			<h1>Inicio de Sesion</h1>
			<div class="input-box">
				<input type="text" name="email" placeholder="Correo Electrónico" required>
			</div>
			<div class="input-box">
				<input type="password" name="password" placeholder="Contraseña" required>
			</div>
			<div class="remember-forgot">
				<label><input type="checkbox" name="remember"> Recordarme</label>
				<a href="#">¿Olvidó su contraseña?</a>
			</div>
			<button type="submit" class="Btn">Ingresar</button>
			<div class="register-link">
				<p>¿No tiene cuenta? <a href="{{ url('/register') }}">Regístrese</a></p>
			</div>
		</form>
	</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME</title>

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
            margin: 0;
        }
        .barra_navegacion{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 10vh;
        }

        .nav{
            position: fixed;
            top: 0;
            display: flex;
            justify-content: space-around;
            width: 100%;
            height: 100px;
            line-height: 100px;
            background: linear-gradient(rgba(39, 39, 39, 0.6), transparent);
            z-index: 100;
        }

        .navegacion_menu ul{
            display: flex;
        }

        .navegacion_menu ul li{
            list-style-type: none;
        }

        .navegacion_menu ul li .link{
            text-decoration: none;
            font-weight: 500;
            color: #fff;
            padding-bottom: 15px;
            margin: 0 25px;
        }

        .link:hover, active{
            border-bottom: 2px solid #fff;
        }
        .navegacion_menu a:hover,
        .navegacion_menu a:active {
            color: white;
        }

        .logo img {
            height: 50px;
            border-radius: 34px;
            border: 4px solid;
        }

        .contenedor_recuadros {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 170px;
            gap: 20px;
        }

        .div_zapatos, .div_ropaniños, .div_ropaadultos, .div_accesorios, .div_conjuntos {
            width: 30%;
            margin: 20px 0;
        }

        .contenido_zapatos, .contenido_niños, .contenido_adultos, .contenido_accesorios, .contenido_conjuntos {
            text-align: center;
            background: transparent;
            padding: 20px;
			border: solid 4px #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
			backdrop-filter: blur(10px);
        }
		

        .titulo_zapatos, .titulo_niños, .titulo_adultos, .titulo_accesorios, .titulo_conjuntos {
            font-size: 24px;
            margin-bottom: 15px;
            color: #333;
			margin-bottom: 10px;
    		font-size: 20px;
    		margin-top: 20px;
    		background: linear-gradient(
        		to right,
        			#fcfcfc 20%,
        			#242517 40%,
     				#718021 60%,
        			#fcfcfc 80%
    			);
			animation: shine 6s linear infinite;
   			background-size: 200%;
    		background-clip: text;
    		color: transparent;
        }

                @keyframes shine {
            to {
                background-position: 200% center;
            }
        }

        .imagen_zapatos, .imagen_niños, .imagen_adultos, .imagen_accesorios, .imagen_conjuntos {
            width: 50%;
            max-width: 300px;
            border-radius: 10px;
        }

		.imagen_zapatos {
			background-size: cover;
			animation: changeImage 10s infinite;
		}

		@keyframes changeImage {
    0% { background-image: url('../imagenes/zapatos_hombre.jpg'); }
    33% { background-image: url('../imagenes/zapatos_mujer.jpg'); }
    66% { background-image: url('../imagenes/zapatos_joven.jpg'); }
    100% { background-image: url('../imagenes/zapatos_niños.jpg'); }
  }

        button[type="submit"] {
            background: #313131;
            color: white;
            border: none;
            padding: 10px 50px;
            font-size: 16px;
            border-radius: 15px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button[type="submit"]:hover {
            background: #2980b9;
			color:#333
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
                    <li><a href="{{ url('/inicio_s') }}" class="link" active>INICIO DE SECCION</a></li>
                    <li><a href="{{ url('/register') }}" class="link">REGISTRESE</a></li>
                    <li><a href="{{ url('/nosotros') }}" class="link">DE NOSOTROS</a></li>
                    <li><a href="{{ url('/contacto') }}" class="link">CONTACTO</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="contenedor_recuadros">
        <div class="div_zapatos">
            <div class="contenido_zapatos">
                <p class="titulo_zapatos">ZAPATOS</p>
                <img src="../imagenes/zapatos_niños.jpg" class="imagen_zapatos">
                <p><button type="submit" class="ver_zapatos" onclick="redireccion_5()">IR!</button></p>
            </div>
        </div>
        <div class="div_ropaniños">
            <div class="contenido_niños">
                <p class="titulo_niños">NIÑOS</p>
                <img src="../imagenes/ropa_niños.jpg" class="imagen_niños">
                <p><button type="submit" class="ver_niños" onclick="redireccion_4()">IR!</button></p>
            </div>
        </div>
        <div class="div_ropaadultos">
            <div class="contenido_adultos">
                <p class="titulo_adultos">ADULTOS</p>
                <img src="../imagenes/ropa_adultos.jpg" class="imagen_adultos">
                <p><button type="submit" class="ver_adultos" onclick="redireccion_3()">IR!</button></p>
            </div>
        </div>
        <div class="div_accesorios">
            <div class="contenido_accesorios">
                <p class="titulo_accesorios">ACCESORIOS</p>
                <img src="../imagenes/accsesorios.jpg" class="imagen_accesorios">
                <p><button type="submit" class="ver_accesorios" onclick="redireccion_2()">IR!</button></p>
            </div>
        </div>
        <div class="div_conjuntos">
            <div class="contenido_conjuntos">
                <p class="titulo_conjuntos">CONJUNTOS</p>
                <img src="../imagenes/conjuntos.jpg" class="imagen_conjuntos">
                <p><button type="submit" class="ver_conjuntos" onclick="redireccion_1()">IR!</button></p>
            </div>
        </div>
    </div>
</body>
</html>

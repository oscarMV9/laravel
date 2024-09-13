<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros - Tienda de Prendas</title>
    <link rel="stylesheet" href="styles.css">
</head>
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

header {
    color: white;
    text-align: center;
    padding: 1rem 0;
}

header h1 {
    font-size: 2.5rem;
}

.about-section {
    max-width: 1200px;
    margin: 2rem auto;
    border: solid 2px #ccc;
    backdrop-filter: blur(10px);
    text-align: center;
    padding: 1rem;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.about-section h2 {
    text-align: center;
    font-size: 2rem;
    margin-bottom: 1rem;
    color: #fafafa;
}

.about-section .content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    flex-direction: column; 
    text-align: center; 
    padding: 20px; 
}

.about-section .about-img {
    width: 40%;
    border-radius: 10px;
    margin-right: 1rem;
}

.about-section p {
    width: 55%;
    font-size: 1.5rem;
    line-height: 1.8;
    color: #000000;
}

footer {
    text-align: center;
    padding: 1rem;
    background-color: #333;
    color: white;
    margin-top: 2rem;
}

footer p {
    font-size: 1rem;
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
                    <li><a href="{{ url('/inicio_s') }}" class="link" active>INICIO DE SECCION</a></li>
                    <li><a href="{{ url('/register') }}" class="link">REGISTRESE</a></li>
                    <li><a href="{{ url('/nosotros') }}" class="link">DE NOSOTROS</a></li>
                    <li><a href="{{ url('/contacto') }}" class="link">CONTACTO</a></li>
                </ul>
            </div>
        </nav>
    </div>
<div class="bodyy">
    <header>
        <h1>Ana styles</h1>
    </header>

    <section class="about-section">
        <h2>Sobre Nosotros</h2>
        <div class="content">
            <p>
                Somos una empresa dedicada a la venta y distribución de prendas de vestir de la más alta calidad. 
                Nuestro equipo está comprometido con ofrecer lo mejor en moda y estilo, asegurando que cada cliente encuentre lo que necesita.
            </p>
            <p>
                Con más de 1 año en el mercado, trabajamos con las mejores fábricas y diseñadores para traer lo último en tendencias. 
                Nos enfocamos en brindar un excelente servicio al cliente, entrega rápida y productos que hacen la diferencia.
            </p>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Ana styles. Todos los derechos reservados.</p>
    </footer>
</div>
</body>
</html>

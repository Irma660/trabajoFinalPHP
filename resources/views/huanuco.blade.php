<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width,
    initial-scale=1.0"> <title>Huánuco</title>
<!-- Incluye los estilos de Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
<style>
    body {
        background-color: #fff;
        color: #333;
        position: relative;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #00703e;
        color: #fff;
        text-align: center;
        padding: 20px;
        margin-top: 50px;
        /* Margen superior para bajar el encabezado */
    }

    h1 {
        font-size: 2.5rem;
    }

    .container {
        max-width: 1000px;
        /* Contenedor más ancho */
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 1;
    }

    .history {
        margin: 20px 0;
        padding: 20px;
        background-color: #fff;
        border: 2px solid #00703e;
        border-radius: 5px;
    }

    .history h2 {
        color: #00703e;
        font-size: 1.5rem;
    }

    .history p {
        font-size: 1rem;
    }

    .packages {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .package {
        width: calc(50% - 20px);
        margin: 20px 0;
        padding: 20px;
        background-color: #fff;
        border: 2px solid #00703e;
        border-radius: 5px;
        transition: transform 0.3s;
    }

    .package h3 {
        color: #00703e;
        font-size: 1.5rem;
    }

    .package p {
        font-size: 1rem;
    }

    .buy-button {
        background-color: #00703e;
        color: #fff;
    }

    /* Efecto hover */
    .package:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    footer {
        background-color: #00703e;
        color: #fff;
        text-align: center;
        padding: 10px;
    }

    /* Líneas decorativas en los costados */
    .side-lines {
        position: absolute;
        top: 0;
        height: 100%;
        width: 100%;
        z-index: -1;
    }

    .side-line-left,
    .side-line-right {
        position: absolute;
        width: 4px;
        background-color: #00703e;
        height: 100%;
        top: 0;
    }

    .side-line-left {
        left: 5px;
    }

    .side-line-right {
        right: 5px;
    }

    /* Patrón de fondo */
    .background-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('pattern.png');
        /* Ruta de la imagen de patrón */
        opacity: 0.2;
    }

    .centrar-contenido {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 10vh;
        /* Establece la altura del contenedor al 80% del alto de la ventana del navegador */
    }
    

/* Estilos de las redes sociales */
.social-media {
    margin-bottom: 20px;
}

.social-media a {
    color: #080303;
    margin-right: 10px;
    text-decoration: none;
}

.social-media a:hover {
    color: #0e0b0b;
}

/* Estilos de los enlaces */
.links a {
    color: #080707;
    margin-right: 10px;
    text-decoration: none;
}

.links a:hover {
    color: #f50808;
}
</style>
</head>

<body>

    <div class="centrar-contenido">
        <img src="{{ asset('img/logo.jpg') }}" width="331" height="226">
    </div>
    <!-- Patrón de fondo en los costados -->
    <div class="background-pattern"></div>

    <header>
        <h1>Huánuco la ciudad con el mejor clima del mundo</h1>
    </header>

    <div class="container">
        <div class="history">
            <h2>Historia de Huánuco</h2>
            <p>Huánuco es una ciudad peruana ubicada en la sierra central del país. Es la capital del departamento de
                Huanuco y se encuentra a una altitud de 1.895 metros sobre el nivel del mar. La ciudad tiene una
                población de aproximadamente 300.000 habitantes. Huánuco fue fundada en 1539 por los españoles y se
                convirtió en un importante centro minero durante la época colonial. En el siglo XIX, Huanuco fue el
                escenario de varias batallas durante la Guerra de Independencia del Perú. La ciudad fue finalmente
                liberada de los españoles en 1821.</p>
        </div>

        <h2>Paquetes de Turismo</h2>
        <div class="packages">
            <div class="package">
                <img src="paquete1.jpg" alt="Paquete 1">
                <h3>Paquete de Aventura</h3>
                <p>Descubre la belleza natural de Huánuco con nuestro paquete de aventura. Incluye visitas a la Laguna
                    de Los Milagros, el Parque Nacional de Tingo María y emocionantes excursiones. Precio: $300.</p>
                <a href="{{ route('comprar') }}"  method="POST" class="btn btn-primary buy-button">Comprar</a>
                @csrf
            </div>
            <div class="package">
                <img src="paquete2.jpg" alt="Paquete 2">
                <h3>Paquete Histórico</h3>
                <p>Explora la rica historia de Huánuco con nuestro paquete histórico. Visita museos, monumentos y sitios
                    históricos de la ciudad. Precio: $250.</p>
                <a href="#" class="btn btn-primary buy-button">Comprar</a>
            </div>
            <div class="package">
                <img src="paquete3.jpg" alt="Paquete 3">
                <h3>Paquete Relajante</h3>
                <p>Relájate y disfruta de la tranquilidad de Huánuco con nuestro paquete relajante. Incluye tiempo en
                    spas, aguas termales y una estancia en un hotel de lujo. Precio: $400.</p>
                <a href="#" class="btn btn-primary buy-button">Comprar</a>
            </div>
        </div>
    </div>

    <footer>
        <div class="social-media">
            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
            <a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="links">
            <a href="https://www.feandalucia.ccoo.es/docu/p5sd5402.pdf">Políticas</a>
            <a href="https://publuu.com/flip-book/267582/628408">Guía turística</a>
            <a href="https://w.app/CityTours">Contáctanos</a>
        </div>
        &copy; 2023 Huánuco - Explora y Descubre
    </footer>
</body>

</html>
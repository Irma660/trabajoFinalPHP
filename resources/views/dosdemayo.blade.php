<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width,
    initial-scale=1.0"> <link rel="icon" href="iconos/mon.ico" /> <title>Dos de mayo</title> <!-- Incluye los estilos de
    Bootstrap --> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"> <style> <style> body {
    background-color: #fff; color: #333; position: relative; margin: 0; padding: 0; } header { background-color:
    #00703e; color: #fff; text-align: center; padding: 20px; margin-top: 50px; /* Margen superior para bajar el
    encabezado */ } h1 { font-size: 2.5rem; } .container { max-width: 1000px; /* Contenedor más ancho */ margin: 0 auto;
    padding: 20px; background-color: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); position: relative; z-index: 1; }
    h2 { text-align: center; /* Centra el texto horizontalmente */ } .history { background-color: #f9f9f9; border: 1px
    solid #ddd; border-radius: 5px; padding: 20px; margin: 20px 0; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); } .history
    h2 { color: #00703e; font-size: 1.5rem; margin-bottom: 10px; } .history p { font-size: 1rem; line-height: 1.5;
    text-align: justify; } .buy-button { background-color: #00703e; color: #fff; } footer { background-color: #00703e;
    color: #fff; text-align: center; padding: 10px; } .side-line-left, .side-line-right { position: absolute; width:
    4px; background-color: #00703e; height: 100%; top: 0; } .side-line-left { left: 5px; } .side-line-right { right:
    5px; } /* Patrón de fondo */ .background-pattern { position: absolute; top: 0; left: 0; width: 100%; height: 100%;
    background-image: url ('pattern.png'); /* Ruta de la imagen de patrón */ opacity: 0.2; } .centrar-contenido {
    display: flex; flex-direction: column; justify-content: center; align-items: center; min-height: 10vh; /* Establece
    la altura del contenedor al 80% del alto de la ventana del navegador */ } /* Estilos de las redes sociales */
    .social-media { margin-bottom: 20px; } .social-media a { color: #080303; margin-right: 10px; text-decoration: none;
    } .social-media a:hover { color: #0e0b0b; } /* Estilos de los enlaces */ .links a { color: #080707; margin-right:
    10px; text-decoration: none; } .links a:hover { color: #f50808; } .card { margin: calc(50% - 20px); padding: 20px;
    margin: 20px; /* Espacio entre las cards */ background-color: #fff; border: 2px solid #00703e; border-radius: 5px;
    transition: transform 0.3s; } /* Estilo para la imagen dentro de la card */ .card-img-top img { width: 100%; /*
    Asegura que la imagen llene el contenedor */ height: auto; border-top-left-radius: 8px; border-top-right-radius:
    8px; } /* Estilo para el contenido dentro de la card */ .card-body { padding: 10px; } /* Estilo para el título del
    paquete */ .card-title { font-size: 1.25rem; font-weight: bold; } .card:hover { transform: scale(1.05); /* Escalar
    la card al hacer hover */ } .card:hover .buy-button { display: block; width: 100%; background-color: #007BFF; color:
    #fff; border: none; border-radius: 4px; padding: 10px; text-align: center; cursor: pointer; transition:
    background-color 0.2s; /* Transición para el efecto hover */ } .card-text { font-size: 1.2rem; /* Ajusta el tamaño
    del texto según tus preferencias */ } .packages { display: flex; flex-wrap: wrap; justify-content: center; /* Centra
    horizontalmente */ align-items: center; /* Centra verticalmente */ } </style>
</head>

<body>

    <div class="centrar-contenido">
        <img src="{{ asset('img/logo.jpg') }}" width="331" height="226">
    </div>
    <!-- Patrón de fondo en los costados -->
    <div class="background-pattern"></div>

    <header>
        <h1>Dos de mayo - Huánuco Pampa</h1>
    </header>

    <div class="container">
        <div class="history">
            <h2>Historia de Huánuco Pampa</h2>
            <p>Huánuco Pampa se ubica en el distrito de La Unión, en la provincia de Dos de Mayo, departamento y región
                de Huánuco, a 1.697 metros sobre el nivel del mar.
                El lugar es conocido como Huánuco Marka, Huánuco Viejo y Wanuco Marka.
                Es un legado inca cuya construcción comenzó aprox. en 1460 y fue interrumpido en 1536 debido a la
                invasión española en tierras incas.
                Podemos encontrar un Kancha frente a un Ushnu, que según las investigaciones tenía el propósito de
                apoyar al poder inca en las provincias dominadas.
                A nivel arquitectónico, podemos encontrar la presencia de "Kallancas", grandes recintos destinados a
                fines estatales; y Colcas, depósitos para almacenar alimentos.</p>
        </div>

        <h2>Paquetes de Turismo</h2>
        <div class="packages">
            <div class="card">
                <div class="card-img-top">
                    <img src="{{ asset('img/pampa.jpg') }}" alt="Paquete 1" class="img-fluid">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Paquete 01 - Full day</h3>
                    <p class="card-text">Visita el Parque Nacional Tingo María, Cueva de las Lechuzas, El árbol de
                        Renaco. Mirador Jacintillo, Visita a la Fábrica de Chocolate, Paseo en bote por el rio Monzón,
                        degustación de tragos exóticos, Agua Sulfurosa, Catarata Santa Carmen, Cueva de las Pavas,
                        Mirador de la Bella Durmiente</p>
                    <ul>
                        <li>Inicio: 4:00 a.m. Salida de Huánuco. Camino a la monumental ciudadela de Wanuco Marka. Este
                            sitio arqueológico se remonta a la época inca siendo en ese momento la capital de
                            Chinchaysuyo. En este mismo recinto también tuvo lugar la primera fundación de Huánuco.
                            Regreso a la Unión. City Tour La Unión: Visitaremos su histórico puente "Mariscal Cáceres",
                            mirador, iglesia, etc. Visitaremos las aguas termo medicinales de Tauripampa. Regreso a
                            Huánuco. </li>
                        <li>Fin: 8:00 p.m.</li>
                    </ul>
                    <p class="card-text"><strong>INCLUYE:</strong></p>
                    <ul>
                        <li>Traslados: Movilidad para el Tours.</li>
                        <li>Visitas y excursiones según itinerario.</li>
                        <li>Guía en español.</li>
                        <li>Transporte Turístico (Ida y Vuelta)</li>
                        <li>Servicio de Guiado Profesional </li>
                        <li>Fotos en Hd y se le pasara al correo electrónico o Whatsapp de cada Visitante.</li>
                        <li>Movilidad turística (Servicio de piscina - compartido).</li>
                    </ul>
                    <p class="card-text"><strong>ACTIVIDADES:</strong></p>
                    <ul>
                        <li>Visitas culturales (incluida).</li>
                        <li>Visitas guiadas (incluida).</li>
                        <p class="card-text"><strong>Precio por persona: S/.120.00</strong></p>
                        <a href="{{ route('comprar.store') }}" method="POST"
                            class="btn btn-primary buy-button">Comprar</a>
                </div>
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
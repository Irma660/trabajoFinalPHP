<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width,
    initial-scale=1.0"> <title>Tingo María</title> <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"> <style> body {
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
        <h1>Tingo María y sus encantos</h1>
    </header>

    <div class="container">
        <div class="history">
            <h2>Historia de Tingo</h2>
            <p>Tingo María, ubicada en Huánuco, Perú, es una ciudad fundada en 1938 en la entrada a la Amazonía peruana.
                Con un
                clima cálido todo el año, es conocida por su café y cacao. Sus atracciones incluyen la impresionante
                "Cueva de las
                Lechuzas" y el "Parque Nacional Tingo María," hogar de jaguares y tapires. En las últimas décadas, la
                ciudad ha
                experimentado un auge turístico gracias a su belleza natural y actividades de aventura. Es un destino
                ideal para
                explorar la diversidad geográfica y la biodiversidad de Perú.</p>
        </div>

        <h2>Paquetes de Turismo</h2>
        <div class="packages">
            <div class="card">
                <div class="card-img-top">
                    <img src="{{ asset('img/belladurmiente.jpg') }}" alt="Paquete 1" class="img-fluid">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Paquete 01 - Full day</h3>
                    <p class="card-text">Visita el Parque Nacional Tingo María, Cueva de las Lechuzas, El árbol de
                        Renaco. Mirador Jacintillo, Visita a la Fábrica de Chocolate, Paseo en bote por el rio Monzón,
                        degustación de tragos exóticos, Agua Sulfurosa, Catarata Santa Carmen, Cueva de las Pavas,
                        Mirador de la Bella Durmiente</p>
                    <ul>
                        <li>09:00 AM. Recojo del hotel, Inicio del tour.</li>
                        <li>Visita al Mirador Jacintillo, Vista espectacular unión
                            de dos ríos Huallaga y el rio Monzón.</li>
                        <li>Visita al Parque Nacional Tingo María, Cueva de las lechuzas,
                            donde es habitada por guacharos, loros y murciélagos. </li>
                        <li>Visita a la Fábrica de Chocolate “Choco Pasión”</li>
                        <li>Visita al Balneario Aguas Sulfurosas Medicinal.</li>
                        <li>Paseo en bore por el rio Monzón, full adrenalina.</li>
                        <li>Almuerzo Típico “cueva de las pavas”.</li>
                        <li>Visita la Catarata Santa Carmen, caminata 20 minutos.</li>
                        <li>Visita al Mirador de la Bella Durmiente.</li>
                        <li>6:30 pm. Retorno hacia la ciudad de Huánuco.</li>
                        <li>05:00 PM. Retorno a Tingo María.</li>
                    </ul>
                    <p class="card-text"><strong>INCLUYE:</strong></p>
                    <ul>
                        <li>Traslados: Movilidad para el Tours.</li>
                        <li>Visitas y excursiones según itinerario.</li>
                        <li>Guía en español.</li>
                        <li>Souvenir sorpresa.</li>
                        <li>Transporte Turístico (Ida y Vuelta)</li>
                        <li>Servicio de Guiado Profesional </li>
                        <li>Boletos Turísticos e Ingresos a los Lugares establecidos.</li>
                        <li>Fotos en Hd y se le pasara al correo electrónico o Whatsapp de cada Visitante.</li>
                        <li>Botiquín de primeros auxilios.</li>
                    </ul>
                    <p class="card-text"><strong>ACTIVIDADES:</strong></p>
                    <ul>
                        <li>Visitas culturales (incluida).</li>
                        <li>Visitas guiadas (incluida).</li>
                        <li>Arcilla en la cara.</li>
                        <li>Paseos y tragos exóticos.</li>
                        <p class="card-text"><strong>Precio por persona: S/.100.00</strong></p>
                        <a href="{{ route('comprar.store') }}" method="POST"
                            class="btn btn-primary buy-button">Comprar</a>
                </div>
            </div>
            <div class="card">
                <div class="card-img-top">
                    <img src="{{ asset('img/canotaje.jpg') }}" alt="Paquete 2" class="img-fluid">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Paquete 02 - 02 días</h3>
                    <p class="card-text">
                        Visita al Parque Nacional Tingo María, Agua Sulfurosa, Catarata Santa Carmen, Mirador de la
                        Bella Durmiente. Aventura al Boquerón del Padre Abad Velo de la Novia, Ducha del Diablo, Visita
                        Laguna de los Milagros, la Jungla, el Árbol del Deseo, Paseo en Bote, Trekking Cataratas
                        Gloriapata y Sol Naciente. </p>
                    <h3 class="card-title">Primer día</h3>
                    <ul>
                        <li>09:00. am. Recojo en el hotel, Inicio del tour </li>
                        <li>Vista del Pillco Mozo, el eterno guardián de la ciudad de Huánuco.</li>
                        <li>09:30. am. Arribaremos a 25 km, 45 minutos hacia el Caserío el Milagro.</li>
                        <li>11:00 pm. Provincia de Aucayacu.</li>
                        <li>12.00 pm. Paseo en bote artesanal al centro de la Isla donde, utilizaremos la arcilla
                            para la exfoliación del rostro y cuerpo.</li>
                        <li>01:30. pm. Almuerzo Típico en la Laguna de los Milagros.</li>
                        <li>02:30. pm. Visitaremos la Jungla choza de Tarzán y el Árbol del deseo</li>
                        <li>3:30. pm. Lupuna y observación de plantas medicinales recojo de huayruro.</li>
                        <li>05:00. pm. Retorno a Tingo María. Hotel.</li>
                    </ul>
                    <h3 class="card-title">Segundo día</h3>
                    <ul>
                        <li>08:00. A.M. Horas Recojo en el hotel, Inicio del tour.</li>
                        <li>08:30. A.M. Arribaremos al Boquerón del Padre Abad.</li>
                        <li>10:30. A.M. Visitaremos la catarata Velo la Novia.</li>
                        <li>12:00. P.M. Visitaremos la catarata Ducha del Diablo.</li>
                        <li>01:00. P.M. Visitaremos al fascinante Ovni.</li>
                        <li>01:30. P.M. Almuerzo típico lugar Aguaytía.</li>
                        <li>03:00. P.M. Visita al Puente más Largo del Perú con más de 800 metros de longitud y
                            su Malecón (rio Aguaytía, opcional paseo en bote)</li>
                        <li>05:00 P.M. Retorno a la ciudad de Tingo María.</li>
                    </ul>
                    <p class="card-text"><strong>INCLUYE:</strong></p>
                    <ul>
                        <li>Movilidad para todo el recorrido (grupo).</li>
                        <li>Guía de Turismo (guía conductor).</li>
                        <li>Entradas a los lugares turísticos.</li>
                        <li>Entrada a todos los atractivos turísticos</li>
                        <li>Comida: Desayuno y cena</li>
                    </ul>
                    <p class="card-text"><strong>ACTIVIDADES:</strong></p>
                    <ul>
                        <li>Paseo a áreas naturales (incluida).</li>
                        <li>Visitas culturales (incluida).</li>
                        <li>Visitas guiadas (incluida).</li>
                        <li>Canotaje.</li>
                        <li>Canopy</li>
                        <li>Arcilla en la cara.</li>
                        <li>Paseos y tragos exóticos.</li>
                        <p class="card-text"><strong>Precio por persona: S/.250.00</strong></p>
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
<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width,
    initial-scale=1.0"> <title>Huánuco</title> <!-- Incluye los estilos de Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <link
    rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"> <style>
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
h2 {
    text-align: center; /* Centra el texto horizontalmente */
}

.history {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    margin: 20px 0;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.history h2 {
    color: #00703e;
    font-size: 1.5rem;
    margin-bottom: 10px;
}

.history p {
    font-size: 1rem;
    line-height: 1.5;
    text-align: justify;
}

.buy-button {
background-color: #00703e;
color: #fff;
}

footer {
background-color: #00703e;
color: #fff;
text-align: center;
padding: 10px;
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
background-image: url ('pattern.png');
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
.card {
    
margin: calc(50% - 20px);
padding: 20px;
margin: 20px; /* Espacio entre las cards */
background-color: #fff;
border: 2px solid #00703e;
border-radius: 5px;
transition: transform 0.3s;


}

/* Estilo para la imagen dentro de la card */
.card-img-top img {
    width: 100%; /* Asegura que la imagen llene el contenedor */
    height: auto;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

/* Estilo para el contenido dentro de la card */
.card-body {
    padding: 10px;
}

/* Estilo para el título del paquete */
.card-title {
    font-size: 1.25rem;
    font-weight: bold;
}
.card:hover {
    transform: scale(1.05); /* Escalar la card al hacer hover */
}


.card:hover .buy-button {
    display: block;
    width: 100%;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px;
    text-align: center;
    cursor: pointer;
    transition: background-color 0.2s; /* Transición para el efecto hover */
}
.card-text {
    font-size: 1.2rem; /* Ajusta el tamaño del texto según tus preferencias */
}

.packages {
    display: flex;
    flex-wrap: wrap;
    justify-content: center; /* Centra horizontalmente */
    align-items: center; /* Centra verticalmente */
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
            <div class="card">
                <div class="card-img-top">
                    <img src="{{ asset('img/kotosh.jpg') }}" alt="Paquete 1" class="img-fluid">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Paquete 01 - 2 días</h3>
                    <p class="card-text">Disfruta de "La ciudad con el mejor clima del mundo" y sus templos más antiguos
                        de américa (Kotosh)..</p>
                    <ul>
                        <li>11:00 am. Visita al “León de Huánuco”, Iglesias Emblemáticas de Huánuco (San Sebastián, San
                            Cristóbal) y la palabra "Huánuco" (explicación de todos los puntos mencionados).</li>
                        <li>11:30 am. Visitaremos el “Puente Calicanto”, el más antiguo de Huánuco (construido de cal,
                            clara de huevo, piedra de canto rodado y arena).</li>
                        <li>12:00 am. Salida con dirección al Centro Arqueológico de Kotosh, "La Civilización más
                            antigua en la sierra" (2000 a.c.). </li>
                        <li>Visitaremos el templo de las Manos Cruzadas, observaremos el museo (Cerámicas), el punto
                            Magnético, los seis periodos y el puño.</li>
                        <li>1:30 pm. Almuerzo Típico Huanuqueño (Pachamanca, Locro de gallina, Picante de cuy y
                            Chicharrón).</li>
                        <li>3:30 pm. Salida al Sur (30 minutos), en el trayecto observaremos el valle del río Huallaga y
                            el Pillco Mozo (un hombre Petrificado) Guardia de Huánuco.</li>
                        <li>4:30 pm. Emprenderemos ruta hacia el distrito de Tomayquichua a visitar la “Casa de la
                            Perricholi”. Conoceremos el pozo de los deseos y la verdadera historia de La famosa Micaela
                            Villegas y Hurtado y la casa de Enrique López Albújar, reconocido escritor peruano.</li>
                        <li>5:30 pm. Visitaremos la Hacienda Embrujada o Hacienda de Andabamba, donde se inició la danza
                            de los negritos de Huánuco (Danza Típica).</li>
                        <li>6:30 pm. Retorno hacia la ciudad de Huánuco.</li>
                        <li>6:30 pm. Retorno hacia la ciudad de Huánuco.</li>
                        <li>Fin del servicio.</li>
                    </ul>
                    <p class="card-text"><strong>INCLUYE:</strong></p>
                    <ul>
                        <li>Traslado desde el Terminal / Aeropuerto al Hotel.</li>
                        <li>01 noche de alojamiento Hotel “Las Vegas” (Según disponibilidad al momento de la reserva),
                            en habitaciones matrimoniales, dobles y/o triples</li>
                        <li>2 Almuerzos Típicos de La Región (Al escoger)</li>
                        <li>2 Desayunos Continental en el Hotel.</li>
                        <li>Transporte Turístico (Ida y Vuelta)</li>
                        <li>Servicio de Guiado Profesional </li>
                        <li>Boletos Turísticos e Ingresos a los Lugares establecidos.</li>
                        <li>Fotos en Hd y se le pasara al correo electrónico o Whatsapp de cada Visitante.</li>
                        <li>Asistencia permanente.</li>
                    </ul>
                    <p class="card-text"><strong>ACTIVIDADES:</strong></p>
                    <ul>
                        <li>Visitas culturales (incluida).</li>
                        <li>Visitas guiadas (incluida).</li>
                        <p class="card-text"><strong>Precio por persona: S/.150.00</strong></p>
                        <a href="{{ route('comprar.store') }}" method="POST"
                            class="btn btn-primary buy-button">Comprar</a>
                </div>
            </div>
            <div class="card">
                <div class="card-img-top">
                    <img src="{{ asset('img/perricholi.jpg') }}" alt="Paquete 1" class="img-fluid">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Paquete 02 - Full day</h3>
                    <p class="card-text">Tour Huánuco - Kotosh - Tomayquichua. Te permite conocer la historia y cultura
                        de Huánuco. Con sus hermosos paisajes y haciendas y disfrutando su excelente clima para vivir
                        una experiencia inolvidable.</p>
                    <ul>
                        <li>Visita al Centro Arqueológico de Kotosh, donde se encuentra el famoso templo de las “Manos
                            Cruzadas” con más de 4.000 años de antigüedad y vista de la formación pétrea de Quillarumi.
                        </li>
                        <li>Vista del Pillco Mozo, el eterno guardián de la ciudad de Huánuco.</li>
                        <li>Visita a la Casa de la Perricholi (Famosa actriz, quien con su hermosura e inteligencia
                            cautivó al virrey Manuel Amat) situado en el distrito de Tomayquichua.</li>
                        <li>Visita a la Hacienda Cachigaga donde degustará de bebidas hechas a base de caña de azúcar.
                        </li>
                        <li>Visita a la Ermita de las Pampas.</li>
                        <li>Visita a la Casa de los Artesanos</li>
                        <li>Visita a la Plaza de Armas, su moderna Catedral, templo donde descansa “el Señor de Burgos”
                            Rey y Patrón de Huánuco; El Templo de San Cristóbal, el más antiguo de la ciudad de Huánuco;
                            El templo de San Francisco; el Puente Calicanto, hecho de cal y canto rodado con clara de
                            huevo.</li>
                        <li>Visita al mausoleo de Daniel Alomía Robles (compositor de la famosa melodía “El Cóndor
                            Pasa”).</li>
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
                        <p class="card-text"><strong>Precio por persona: S/.90.00</strong></p>
                        <a href="{{ route('comprar.store') }}" method="POST"
                            class="btn btn-primary buy-button">Comprar</a>
                </div>
            </div>

            <div class="card">
                <div class="card-img-top">
                    <img src="{{ asset('img/baños.jpg') }}" alt="Paquete 1" class="img-fluid">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Paquete 03</h3>
                    <p class="card-text">Relájate y disfruta de la tranquilidad de Huánuco con nuestro paquete
                        relajante. Incluye tiempo en spas, aguas termales y una estancia en un hotel de lujo</p>
                    <ul>
                        <li>Visita al “León de Huánuco”, Iglesias Emblemáticas de Huánuco (San Sebastián, San Cristóbal)
                            y la palabra "Huánuco" (explicación de todos los puntos mencionados).</li>
                        <li>Visitaremos el “Puente Calicanto”, el más antiguo de Huánuco (construido de cal, clara de
                            huevo, piedra de canto rodado y arena).</li>
                        <li>Estadía en el sauna "Las rocas"</li>
                        <li>Almuerzo Típico Huanuqueño (Pachamanca, Locro de gallina, Picante de cuy y Chicharrón).</li>
                        <li>Visita a los tractivos turísticos de Huánuco, como la casa del coronel de Leoncio Prado y su
                            museo.</li>
                        <li>Fin de Servicio</li>
                        <p class="card-text"><strong>DÍA 02:</strong></p>
                        <li>Desayuno en Hotel</li>
                        <li>Salida al pueblo de Baños</li>
                        <li>Visita a las aguas termales llamadas Baños del Inca</li>
                        <li>Almuerzo Típico Huanuqueño (Pachamanca, Locro de gallina, Picante de cuy y Chicharrón).</li>
                        <li>Regreso a la ciudad de Huánuco</li>
                        <li>Fin de Servicio</li>
                    </ul>
                    <p class="card-text"><strong>INCLUYE:</strong></p>
                    <ul>
                        <li>Traslado desde el Terminal / Aeropuerto al Hotel.</li>
                        <li>01 noche de alojamiento Hotel “Estancia” (Según disponibilidad al momento de la reserva), en
                            habitaciones matrimoniales, dobles y/o triples</li>
                        <li>2 Almuerzos Típicos de La Región (Al escoger)</li>
                        <li>2 Desayunos Continental en el Hotel.</li>
                        <li>Transporte Turístico (Ida y Vuelta)</li>
                        <li>Servicio de Guiado Profesional </li>
                        <li>Boletos Turísticos e Ingresos a los Lugares establecidos.</li>
                        <li>Fotos en Hd y se le pasara al correo electrónico o Whatsapp de cada Visitante.</li>
                        <li>Asistencia permanente.</li>
                    </ul>
                    <p class="card-text"><strong>Precio por persona: S/.120.00</strong></p>
                    <a href="{{ route('comprar.store') }}" method="POST" class="btn btn-primary buy-button">Comprar</a>
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
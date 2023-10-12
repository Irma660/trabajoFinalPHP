<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="icon"  href="iconos/mon.ico" />
    <title>CITY TOURS</title>
</head>
<body>
 
<div class="centrar-contenido">
<img src="{{ asset('img/logo.jpg') }}" width="331" height="226">
</div>
<div class="limit">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<h2 class="font-weight-bold" style="font-family: 'Roboto', sans-serif;">Conoce los mejores lugares turísticos de Huánuco</h2>
            
            <div class="carousel-container-wrapper">
            <div class="carousel-container">
        <div class="carousel">
            <div class="carousel-slide">
                <img src="{{ asset('img/huanuco.jpg') }}" alt="Imagen 1">
                <div class="image-description">HUÁNUCO</div>
            </div>
            <div class="carousel-slide">
                <img src="{{ asset('img/dosdemayo.jpg') }}" alt="Imagen 2">
                <div class="image-description">DOS DE MAYO</div>
            </div>
            <div class="carousel-slide">
                <img src="{{ asset('img/tomayquicha.jpg') }}" alt="Imagen 3">
                <div class="image-description">TOMAYKICHWA</div>
            </div>
            <div class="carousel-slide">
                <img src="{{ asset('img/garu.jpg') }}" alt="Imagen 4">
                <div class="image-description">COMPLEJO ARQUEOLÓGICO GARU</div>
            </div>
            <div class="carousel-slide">
                <img src="{{ asset('img/parquetingo.jpg') }}" alt="Imagen 5">
                <div class="image-description">PARQUE NACIONAL DE TINGO MARÍA</div>
            </div>
        </div>
        <button id="prevBtn">Anterior</button>
        <button id="nextBtn">Siguiente</button>
    </div>
    </div>
    <div class="discover-more">
    <a href="{{ route('DescubrirLugares') }}" target="_blank">Ver Más Lugares</a>
    </div>
    <script>
        const carousel = document.querySelector('.carousel');
        const slides = document.querySelectorAll('.carousel-slide');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        let currentIndex = 0;

        function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.style.display = 'block';
            } else {
                slide.style.display = 'none';
            }
        });
    }

    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    });

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    });

    showSlide(currentIndex);
    </script>
<div class="lugar-container">
<div class="lugar">
        <img src="{{ asset('img/hco.jpg') }}" alt="La plaza de armas de la ciudad Huánuco">
        <h2>Huánuco</h2>
        <p>La provincia de Huánuco se encuentra situada en la parte central del departamento homólogo, bajo la administración del Gobierno Regional de Huánuco. Limita por el norte con las provincias de Leoncio Prado y Dos de Mayo, por el este con Pachitea, por el sur con Ambo y por el oeste con Lauricocha y Yarowilca...</p>
    </div>

    <div class="lugar">
        <img src="{{ asset('img/tingo.jpg') }}" alt="Plaza de la ciudad de Tingo María">
        <h2>Tingo María</h2>
        <p>Tingo María es una ciudad peruana capital del distrito de Rupa-Rupa y a la vez de la provincia de Leoncio Prado en el departamento de Huánuco.</p>
        <p>Tingo María se encuentra ubicado en la selva alta por lo que es apodada la "Puerta de entrada a la Amazonía Peruana". Su entorno destaca los paisajes cubiertos de bosques, cascadas, cuevas y diversidad biológica. </p>
    </div>
    <div class="lugar">
        <img src="{{ asset('img/2mayo.jpg') }}" alt="Plaza de la Unión">
        <h2>Dos de mayo</h2>
        <p>La provincia de Dos de Mayo es una de las once que conforman el departamento de Huánuco. Limita por el norte con la provincia de Huamalíes; por el sur con la provincia de Lauricocha, la provincia de Yarowilca y la provincia de Huánuco; por el este con la provincia de Leoncio Prado, la provincia de Huánuco y la provincia de Yarowilca, y por el oeste con la provincia de Bolognesi, del departamento de Áncash.</p>
        <p>Este destino es parte de la historia incaica, que se plasma en un monumento arqueológico impresionante. Además, cuenta con aguas termales con propiedades medicinales. </p>
    </div>
    </div>
<div class="paquete">
        <img src="imagen_paquete1.jpg" alt="Paquete 1">
        <h2>Paquete Turístico 1</h2>
        <div class="detalle">
            <i class="fas fa-moon"></i> 1 noche
        </div>
        <div class="detalle">
            <i class="fas fa-utensils"></i> Desayuno, Almuerzo y Cena
        </div>
        <div class="detalle">
            <i class="fas fa-car"></i> Pasajes a 3 lugares turísticos
        </div>
        <div class="discover-more">
    <a href="{{ route('RealizarReserva') }}" target="_blank">Reservar</a>
    </div>
    </div>

     
</body>
</html>

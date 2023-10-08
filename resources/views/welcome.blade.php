<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="icon"  href="iconos/mon.ico" />
    <title>CITY TOURS</title>
</head>
<body>
 
<div class="centrar-contenido">
<img src="{{ asset('img/logo.jpg') }}" width="231" height="126">
</div>
<div class="limit">
            <h2>Conoce los mejores lugares turísticos de Huánuco</h2>
        <div class="carousel-container">
        <div class="carousel-slide">
            <img src="{{ asset('img/huanuco.jpg') }}" alt="Imagen 1">
        </div>
        <div class="carousel-slide">
            <img src="{{ asset('img/dosdemayo.jpg') }}" alt="Imagen 2">
        </div>
        <div class="carousel-slide">
            <img src="{{ asset('img/tomayquicha.jpg') }}" alt="Imagen 3">
        </div>
        <div class="carousel-slide">
            <img src="{{ asset('img/garu.jpg') }}" alt="Imagen 4">
        </div>
        <div class="carousel-slide">
            <img src="{{ asset('img/parquetingo.jpg') }}" alt="Imagen 5">
        </div>
    </div>
    <button id="prevBtn">Anterior</button>
    <button id="nextBtn">Siguiente</button>
    
        </div>
        <script>
// Obtiene elementos del DOM
const carouselContainer = document.querySelector('.carousel-container');
const carouselSlides = document.querySelectorAll('.carousel-slide');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let currentIndex = 0; // Índice de la diapositiva actual

// Función para mostrar la diapositiva actual
function showSlide(index) {
    carouselSlides.forEach((slide, i) => {
        slide.style.transform = `translateX(${100 * (i - index)}%)`;
    });
}

// Manejadores de eventos para los botones de navegación
prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
        showSlide(currentIndex);
    }
});

nextBtn.addEventListener('click', () => {
    if (currentIndex < carouselSlides.length - 1) {
        currentIndex++;
        showSlide(currentIndex);
    }
});

// Muestra la primera diapositiva al cargar la página
showSlide(currentIndex);
</script>
     
</body>
</html>

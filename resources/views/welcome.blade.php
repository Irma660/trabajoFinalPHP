<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="icon"  href="iconos/mon.ico" />
    <title>CITY TOURS</title>
</head>
<body>
 
<div class="centrar-contenido">
<img src="{{ asset('img/logo.jpg') }}" width="331" height="226">
</div>
<div class="limit">
            <h2>Conoce los mejores lugares turísticos de Huánuco</h2>

            <div class="carousel-container-wrapper">
            <div class="carousel-container">
        <div class="carousel">
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
     
</body>
</html>

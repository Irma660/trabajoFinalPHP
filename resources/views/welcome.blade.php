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

<!DOCTYPE html> <html lang="en">

<head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
         <link rel="icon" href="iconos/mon.ico" /> <title>CITY TOURS</title>
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
                <img id="prevBtn" class="custom-button" src="{{ asset('img/arrow-left.png') }}" alt="Anterior">
                <img id="nextBtn" class="custom-button" src="{{ asset('img/arrow-right.png') }}" alt="Siguiente">
            </div>
        </div>
        <div class="discover-more">
        <a href="{{ route('RealizarReserva') }}" target="_blank">Reservar</a>
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
    </div>

    <div class="title-cards">
        <h2>LOS LUGARES MÁS VISITADOS</h2>
        <hr>
        <hr style="border: 2px;">
    </div>
    <div class="container-card">

        <div class="card">
            <figure>
                <img src="{{ asset('img/hco.jpg') }}" alt="La plaza de armas de la ciudad Huánuco">
            </figure>
            <div class="contenido-card">
                <h3>Huánuco</h3>
                <p>La provincia de Huánuco se encuentra situada en la parte central del departamento de Huánuco. Limita
                    por el norte con las provincias de Leoncio Prado y Dos de Mayo, por el este con Pachitea, por el sur
                    con Ambo y por el oeste con Lauricocha y Yarowilca...</p>
                <p>Huánuco también es considerada con el mejor clima del mundo. Posee importantes atractivos turísticos,
                    como nevados, cordilleras, valles y selvas amazónicas. </p>
                <a href="{{ route('infoHuanuco') }}" target="_blank">Ver paquetes</a>
            </div>
        </div>
        <div class="card">
            <figure>
                <img src="{{ asset('img/tingo.jpg') }}" alt="Plaza de la ciudad de Tingo María">
            </figure>
            <div class="contenido-card">
                <h3>Tingo María</h3>
                <p>Tingo María es una ciudad peruana capital del distrito de Rupa-Rupa y a la vez de la provincia de
                    Leoncio Prado en el departamento de Huánuco.</p>
                <p>Tingo María se encuentra ubicado en la selva alta por lo que es apodada la "Puerta de entrada a la
                    Amazonía Peruana". Su entorno destaca los paisajes cubiertos de bosques, cascadas, cuevas y
                    diversidad biológica. </p>
                <a href="{{ route('infoTingo') }}" target="_blank">Ver paquetes</a>
            </div>
        </div>
        <div class="card">
            <figure>
                <img src="{{ asset('img/2mayo.jpg') }}" alt="Plaza de la Unión">
            </figure>
            <div class="contenido-card">
                <h3>Dos de mayo</h3>
                <p>La provincia de Dos de Mayo es una de las once que conforman el departamento de Huánuco. Limita por
                    el norte con la provincia de Huamalíes</p>
                <p>Este destino es parte de la historia incaica, que se plasma en un monumento arqueológico
                    impresionante. Además, cuenta con aguas termales con propiedades medicinales y produce Café de
                    cebada tostada. Shinguirito. Mate de coca.</p>
                <a href="{{ route('infoDosm') }}" target="_blank">Ver paquetes</a>
            </div>
        </div>
        <div class="card">
            <figure>
                <img src="{{ asset('img/lauricocha.jpg') }}" alt="Laguna">
            </figure>
            <div class="contenido-card">
                <h3>Lauricocha</h3>
                <p>Este destino es parte de la historia incaica, que se plasma en un monumento arqueológico
                    impresionante. Además, cuenta con aguas termales con propiedades medicinales. </p>
                <p>En Lauricocha se encontraron restos del primer hombre que es considerado el hombre más antiguo del
                    Perú, ya que se calcula tiene una antigüedad de 20,000 años a.C.</p>
                <a href="{{ route('infolauricocha') }}" target="_blank">Ver paquetes</a>
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
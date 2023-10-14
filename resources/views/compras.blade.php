<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="iconos/mon.ico">
    <title>COMPRA</title>
    <!-- Agrega los enlaces a las bibliotecas de Bootstrap y los iconos -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css">
    <style>
        /* Estilos personalizados */
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        .btn-center {
            text-align: center;
        }

        footer {
            background-color: #00703e;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <form action="/comprar" method="post">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="dni">DNI</label>
                <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
            </div>
            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
            </div>
            <div class="form-group">
                <label for="lugar">Lugar</label>
                <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Lugar">
            </div>
            <div class="form-group">
                <label for="numero_de_paquete">Número de paquete</label>
                <input type="number" class="form-control" id="numero_de_paquete" name="numero_de_paquete"
                    placeholder="Número de paquete">
            </div>
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha">
            </div>
            <div class="form-group">
                <label for="numero_de_personas">Número de personas</label>
                <input type="number" class="form-control" id="numero_de_personas" name="numero_de_personas"
                    placeholder="Número de personas">
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="bi bi-currency-dollar"></i>
                        </span>
                    </div>
                    <input type="number" class="form-control" id="precio" name="precio" placeholder="Precio">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Comprar</button>
        </form>
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
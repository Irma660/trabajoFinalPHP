<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="iconos/mon.ico" /><title>Reservas</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background: #f0f0f0;
            border: 1px solid #ccc;
            padding: 20px;
            width: 400px;
        }
        .input-container {
            display: flex;
            margin-bottom: 10px;
        }
        .input-container i {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Formulario de Registro</h1>
        <form action="procesar_registro.php" method="POST">
            <div class="input-container">
                <i class="fas fa-user"></i>
                <input type="text" id="nombre_titular" name="nombre_titular" placeholder="Nombre del Titular" required>
            </div>

            <div class="input-container">
                <i class="fas fa-phone"></i>
                <input type="tel" id="telefono" name="telefono" placeholder="Teléfono" required>
            </div>

            <div class="input-container">
                <i class="fas fa-id-card"></i>
                <input type="text" id="dni" name="dni" placeholder="DNI" required>
            </div>

            <div class="input-container">
                <i class="fas fa-users"></i>
                <input type="number" id="num_personas" name="num_personas" placeholder="Número de Personas" required>
            </div>

            <div class="input-container">
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" placeholder="Correo Electrónico" required>
            </div>

            <!-- Resto del formulario -->

            <input type="submit" value="Registrarse">
        </form>
    </div>
</body>
</html>
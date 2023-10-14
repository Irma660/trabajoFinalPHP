<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
<form action="/comprar" method="post">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="text" name="dni" placeholder="DNI">
    <input type="text" name="telefono" placeholder="Teléfono">
    <input type="text" name="direccion" placeholder="Dirección">
    <input type="text" name="lugar" placeholder="Lugar">
    <input type="number" name="numero_de_paquete" placeholder="Número de paquete">
    <input type="date" name="fecha" placeholder="Fecha">
    <input type="number" name="numero_de_personas" placeholder="Número de personas">
    <input type="number" name="precio" placeholder="Precio">
    <button type="submit">Comprar</button>
</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,
initial-scale=1.0">
  <title>Insertar</title>
  <link rel="stylesheet" href="./styles.css">
</head>

<body>
  <?php include './menu.php' ?>
  <form method="post" action="./insertar_logica.php">
    <label id="mascota_id">Mascota ID: <input id="mascota_id" name="mascota_id" type="text" required /></label>
    <label id="nombre_mascota">Nombre de Mascota: <input id="nombre_mascota" name="nombre_mascota" type="text" required /></label>
    <label id="tipo">Tipo: <input id="tipo" name="tipo" type="text" required /></label>

    <label id="raza">Raza: <input id="raza" name="raza" type="text" required /></label>

    <legend>Sexo:</legend>

    <input type="radio" name="sexo" id="F" value="F" required>
    <label for="F">Femenino</label>
    <input type="radio" name="sexo" id="M" value="M">
    <label for="M">Masculino</label>

    <label id="nombre_cliente">Nombre de Cliente: <input id="nombre_cliente" name="nombre_cliente" type="text" required /></label>
    <label id="nacimiento">Nacimiento: <input id="nacimiento" name="nacimiento" type="text" required /></label>
    <input id="registrar" name="Registrar" type="submit" />
    <input id="limpiar" name="Limpiar" type="reset" />
  </form>
</body>

</html>
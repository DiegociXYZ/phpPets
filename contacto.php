<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css">
  <title>Contacto</title>
</head>

<body>
  <?php include './menu.php' ?>
  <form method="post" action="./correo.php">
    <label id="nombre">Nombre: <input id="nombre" name="nombre" type="text" required /></label>
    <label id="email">Email: <input id="email" name="email" type="text" required /></label>
    <label id="mensaje">Mensaje: <textarea id="mensaje" name="mensaje" required rows="5" cols="40"></textarea></label>
    <input id="submit" name="Enviar" type="submit" />
    <input id="limpiar" name="Limpiar" type="reset" />
  </form>
</body>

</html>
<?php include './conexion.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,
initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css">
  <title>Buscar</title>
</head>

<body>
  <?php include './menu.php' ?>
  <form method="POST" name="form1">
    <div class="buscardor">
      <label for="buscar">ID mascota: </label>
      <input type="text" name="buscar" id="buscar" />
      <input type="submit" value="Buscar" />
    </div>
  </form>
  <?php if (isset($_POST['buscar'])) { ?>
    <table>
      <tr>
        <th>Mascota ID</th>
        <th>Nombre de Mascota</th>
        <th>Tipo</th>
        <th>Raza</th>
        <th>Sexo</th>
        <th>Nombre de cliente</th>
        <th>Nacimiento</th>
      </tr>
      <?php
      $sql = "SELECT * FROM mascotas WHERE mascota_id

='$_POST[buscar]'";
      $result = mysqli_query($link, $sql); //ejecuto la consulta
      while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?= $row['mascota_id']; ?></td>
            <td><?= $row['nombre_mascota']; ?></td>
            <td><?= $row['tipo']; ?></td>
            <td><?= $row['raza']; ?></td>
            <td><?= $row['sexo']; ?></td>
            <td><?= $row['nombre_cliente']; ?></td>
            <td><?= $row['nacimiento']; ?></td>
        </tr> <?php } ?>
    </table> <?php } ?>
</body>

</html>
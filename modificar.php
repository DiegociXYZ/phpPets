<?php include './conexion.php' ?>
<html>

<head>
  <meta charset="utf-8">
  <title>Documento sin título</title>
  <link rel="stylesheet" href="./styles.css">
</head>

<body>
  <?php include './menu.php' ?>
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
    $sql = "SELECT * FROM mascotas";
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
            <td><a href="modificar_formulario.php?mod=<?php print
          $row['mascota_id']; ?> ">Modificar</a></td>
        <td><a href="eliminar.php?eli=<?php print $row['mascota_id']; ?>
">Eliminar</a></td>
      </tr>
    <?php } ?>
  </table>
</body>

</html>
<?php include "./conexion.php"; ?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Modificar Formulario</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <?php
    $sql = "SELECT * FROM mascotas WHERE mascota_id ='$_GET[mod]'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <form id="form1" name="form1" method="post" action="modificar_logica.php">
        <label for="textfield">Nombre de mascota: <input type="text" name="nombre_mascota" id="nombre_mascota"
                value="<?php print $row['nombre_mascota']; ?>" /></label>

        <label for="textfield2">Tipo: <input type="text" name="tipo" id="tipo"
                value="<?php print $row['tipo']; ?>" /></label>

        <label for="textfield3">Raza: <input type="text" name="raza" id="raza" value="<?php print $row['raza'];
        ?>" /></label>
        
        <legend>Sexo:</legend>
        <?php if ($row['sexo'] == 'F') { ?>
            <input type="radio" name="sexo" value="F" id="F" checked="checked" />
        <?php } else { ?> <input type="radio" name="sexo" value="F" id="F" /><?php } ?>
        <label for="F">Femenino</label>
        <?php if ($row['sexo'] == 'M') { ?>
            <input type="radio" name="sexo" value="M" id="M" checked="checked" />

        <?php } else { ?> <input type="radio" name="sexo" value="M" id="M" /><?php } ?>
        <label for="M">Masculino</label>

        <label for="textfield">Nombre de cliente: <input type="text" name="nombre_cliente" id="nombre_cliente"
                value="<?php print $row['nombre_cliente']; ?>" /></label>

 

        <label for="textfield3">Nacimiento: <input type="text" name="nacimiento" id="nacimiento"
                value="<?php print $row['nacimiento']; ?>" /></label>

        <input type="hidden" name="oculto" id="oculto" value="<?php print
            $row['mascota_id']; ?>" />
        <input type="submit" name="submit" id="submit" value="Enviar">
    </form>
</body>

</html>
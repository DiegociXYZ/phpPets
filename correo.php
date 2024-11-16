$mensaje = "Nombre: $_POST[nombre]
Correo: $_POST[correo]
Mensaje: $_POST[mensaje]";
if (mail("correo@mipagina.com", "Asunto", $mensaje, "From:web")) {
?>
<script>
alert("Se envio el correo");
</script>
<?php } else { ?>
<script>
alert("Estamos en mantenimiento preventivo");
</script>
<?php } ?>
<meta http-equiv="refresh" content="0;URL=contacto.php">
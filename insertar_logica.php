<?php
include "./conexion.php";
$sql="INSERT INTO usuarios VALUES
('$_POST[mascota_id]','$_POST[nombre_mascota]','$_POST[tipo]',
'$_POST[raza]','$_POST[sexo]','$_POST[nombre_cliente]','$_POST[nacimiento]')";
$result = mysqli_query($link, $sql); //ejecuto la consulta
if (!mysqli_error($link)) {
?>
<script>
alert("Se ingreso con total normalidad");
</script>
<?php
}else{
?>
<script>
alert ("Estamos en mantenimiento preventivo");
</script>
<?php } ?>
<meta http-equiv="refresh" content="0;URL=insertar.php">

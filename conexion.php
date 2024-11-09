<?php
$link = mysqli_connect("localhost", "root", "", "petstore");
if (!$link) {
die('Error de Conexión (' . mysqli_connect_errno() . ') '
. mysqli_connect_error());
}
?>
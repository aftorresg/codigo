<?php
session_start();
require("config.php");

$usuario=$_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$titulo=$_POST['titulo'];
$direccion=$_POST['direccion'];
$categoria=$_POST['categoria'];
$comentario=$_POST['comentario'];
$valoracion=$_POST['valoracion'];

$sql="insert into favoritos values
	('$usuario','$contrasena','$titulo','$direccion','$categoria','$comentario','$valoracion');";

echo $sql;
if (mysqli_query($conn,$sql)) {
	echo "Datos insertados correctamente";
}else{
	die("Error al insertar".mysqli_error($conn));
}
mysqli_close($conn);
header("location:principal.php");

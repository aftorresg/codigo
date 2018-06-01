<?php
$title="Registrar";
include ("header.php");

?>
<form method="POST">
	<input type="text" name="usuario" placeholder="Usuario" class="form-control"><br>
	<input type="password" name="contrasena" placeholder="Contraseña" class="form-control"><br>
	<input type="text" name="nombre" placeholder="Nombre" class="form-control"><br>
	<input type="text" name="apellido" placeholder="Apellido" class="form-control"><br>
	<input type="text" name="edad" placeholder="Edad" class="form-control"><br>
	<input type="submit" name="Crear" value="Crear" class="btn btn-primary">
	<button type="button" class="btn btn-danger btn-sm" onclick="javascript: window.top.location.href='index.php';" >Volver</button>
</form> 

<?php
include("footer.php");
if (isset($_POST['Crear'])) {
	require("config.php");
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$edad = $_POST['edad'];
	
	$sql = "insert into usuarios values ('$usuario','$contrasena','$nombre','$apellido',$edad,2);";
 
if (mysqli_query($conn,$sql)) {
	echo "<script> alert('Registro Correcto'); window.top.location.href='index.php';</script>";
}else{
	die("Error al insertar".mysqli_error($conn));
}
}
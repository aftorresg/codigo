
<?php
$title="<center>Actualizar Favoritos</center>
";
session_start();
$usuario=$_SESSION['usuario'];
$contrasena=$_SESSION['contrasena'];

require("config.php");
include("header.php");



$titulo=$_GET['titulo'];
$direccion=$_GET['direccion'];
$categoria=$_GET['categoria'];
$comentario=$_GET['comentario'];
$valoracion=$_GET['valoracion'];
?>
<table class='table table-bordered table-responsive'><tr>
	<th>Titulo</th>
	<th>Direccion</th>
	<th>Categoria</th>
	<th>Comentarios</th>
	<th>Valoracion</th>
	<th>Actualizar</th>
	</tr>
<?php
echo "
<tr><form method='POST'>
<td><input type='text' value='".$titulo."' required name='titulo'></td>".
"<td><input type='text' value='".$direccion."' required name='direccion'></td>".
"<td><select name='categoria' required>
	<option value='Salud'>Salud</option>
	<option value='Tecnologia'>Tecnologia</option>
	<option value='Ocio'>Ocio</option>
	<option value='Trabajo'>Trabajo</option>
	<option value='Personal'>Personal</option>
	<option selected value='".$categoria."'>".$categoria."</option>
</td>".
"<td><input type='text' value='".$comentario."' required name='comentario'></td>".
"<td><input type='text' value='".$valoracion."' required name='valoracion'></td>".
"<td><input type='submit' value='Actualizar' class='btn btn-success btn-sm' name='Actualizar'>".
"<button type='button' class='btn btn-danger btn-sm' onclick='javascript: redirectPrincipal();'>Cancelar</button></td>
</form></table>";

if(isset($_POST['Actualizar'])) {
	$tituloAntiguo=$_GET['titulo'];
	$titulo=$_POST['titulo'];
	$direccion=$_POST['direccion'];
	$categoria=$_POST['categoria'];
	$comentario=$_POST['comentario'];
	$valoracion=$_POST['valoracion'];
	require("config.php");
	$sql="update favoritos set titulo='$titulo',direccion='$direccion',categoria='$categoria',comentario='$comentario',valoracion='$valoracion' where titulo='$tituloAntiguo';";

	if(mysqli_query($conn,$sql)){
		echo "Datos Actualizados";
}else{
	die("Error Actualizado".mysqli_error($conn));
}
mysqli_close($conn);
header("location:principal.php");
}

include("footer.php");
echo'<center><a href="index.php"> Cerrar Sesión</a></center>';
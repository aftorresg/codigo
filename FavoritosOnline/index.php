<?php
$title="Iniciar Sesion";
include ("header.php");
?>
<form method="POST">
	<input type="text" name="usuario" placeholder="usuario" class="form-control"><br>
	<input type="password" name="contrasena" placeholder="contraseña" class="form-control"><br>
	<input type="submit" name="Ingresar" value="Ingresar" class="btn btn-primary">
	<button type="button" class="btn btn-danger btn-sm" onclick="javascript: window.top.location.href='registrar.php';" >Registrar</button>
</form> 
<?php
include("footer.php");
if (isset($_POST['Ingresar'])) {
	require("config.php");
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
$sql = "select * from usuarios where usuario='$usuario' and contrasena ='$contrasena';";
$resultado = mysqli_query($conn,$sql);

if (mysqli_num_rows($resultado)==1){
	while ($fila=mysqli_fetch_assoc($resultado)) {
		session_start();
		$_SESSION['nombre']=$fila['nombre'];
		$_SESSION['apellido']=$fila['apellido'];
		$_SESSION['usuario']=$fila['usuario'];
		$_SESSION['contrasena']=$fila['contrasena'];
		$_SESSION['permisos']=$fila['permisos'];
	}
	header ("location:principal.php");
}else{
	die("<h3> Error de usuario y/o Contraseña</h3>");
}
}
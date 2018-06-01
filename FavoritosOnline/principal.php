
<?php
$title="<center>Gestion de Favoritos</center>
";
session_start();
$usuario=$_SESSION['usuario'];
$contrasena=$_SESSION['contrasena'];

require("config.php");
include("header.php");


$consulta="select * from favoritos where usuario='$usuario' and 
	contrasena= '$contrasena';";

$resultado=mysqli_query($conn,$consulta);


//session_destroy();
?>

		<div class="col-md-10">
            <div class="profile-content">
			   
            
 	<table class='table table-bordered table-responsive'>
    <thead>
	    <tr>
		 	<th class="tablatd">Titulo</th>
			<th class="tablatd">Direccion</th>
			<th class="tablatd">Categoria</th>
			<th class="tablatd">Comentarios</th>
			<th class="tablatd">Valoracion</th>
			<th class="tablatd">Actualizar</th>
			<th class="tablatd">Eliminar</th>
		</tr>
	</thead>
    <tbody>
<?php
if(mysqli_num_rows($resultado)>0){
	while ($fila=mysqli_fetch_assoc($resultado)) {
		echo "<tr><td>".$fila['titulo']."</td>".
		"<td class='tablatd'>".$fila['direccion']."</td>".
		"<td class='tablatd'>".$fila['categoria']."</td>".
		"<td class='tablatd'>".$fila['comentario']."</td>".
		"<td class='tablatd'>".$fila['valoracion']."</td>".
		"<td class='tablatd' align=center><a class='glyphicon glyphicon-edit' href='formActualizar.php?titulo=".$fila['titulo']."&direccion=".$fila['direccion']."&categoria=".$fila['categoria']."&comentario=".$fila['comentario']."&valoracion=".$fila['valoracion']."'>Actualizar</a></td>".
		"<td  class='tablatd' align=center><a class='glyphicon glyphicon-remove-circle' href='eliminar.php?titulo=".$fila['titulo']."'>Eliminar</a></td></tr>";
	}

}
echo "<tr>
		<form action='crearFavorito.php' method='POST'>
		<td class='tablatd'><input class='tablatd' type='text' name='titulo' required></td>
		<td class='tablatd'><input class='tablatd' type='text' name='direccion' required></td>
		<td class='tablatd'><select class='tablatd' name='categoria'>
			<option value='Salud'>Salud</option>
			<option value='Tecnologia'>Tecnologia</option>
			<option value='Ocio'>Ocio</option>
			<option value='Trabajo'>Trabajo</option>
			<option value='Personal'>Personal</option>
	</td>
	<td class='tablatd'> <input class='tablatd' type='text' name='comentario' required></td>
	<td class='tablatd'><input class='tablatd' type='number' name='valoracion' required></td>
	<td class='tablatd' colspan=2 align=center><input type='submit' class='btn btn-large btn-info'
		value='Guardar'</td>
		
	</form
	</tr>";

echo "</tbody></table></div></div>";

mysqli_close($conn);
include("footer.php");
echo'<center><a href="index.php"> Cerrar Sesión</a></center>';


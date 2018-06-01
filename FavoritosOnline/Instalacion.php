<?php
/*creacion de bgase de datos
	para proyecto FavoritosOnline
	grupo 1093506
*/

//parametros para la conexion
	$servidor="localhost";
	$usuariobd="root";
	$passbd="";
	$bd="favoritos";
//Conectamos a motor de base de datos
$conn=mysqli_connect($servidor,$usuariobd,$passbd);
if(!$conn){
	die("Error en la Conexión a la base de datos".mysqli_connect_error());
	exit;
}
echo "Conectado";
//Crear base de datos favoritos
$sql="create database favoritos;";
if(mysqli_query($conn,$sql)) {
	echo "Base de datos creada<br>";
}else{
	die("Error al crear BD".mysqli_error($conn)."<br>");
}
mysqli_close($conn);
//Crear Tabla Favoritos
$conn=mysqli_connect($servidor,$usuariobd,$passbd,$bd);
$sql="create table favoritos(
		usuario varchar(40) not null,
		contrasena varchar (40) not null,
		titulo varchar (40) not null,
		direccion varchar (100) not null,
		categoria varchar (40),
		comentario varchar (200),
		valoracion int(2)
	)";
if (mysqli_query($conn,$sql)){
	echo "Tabla favoritos creada<br>";
}else{
	die("Error al crear la tabla favoritos".mysqli_error($conn)."<br>");
}
mysqli_close($conn);
//insertar datos de prueba
$conn=mysqli_connect($servidor,$usuariobd,$passbd,$bd);
$sql="insert into favoritos
		values ('admin','admin','google','http://google.com','tecnologia','un buen
			buscador',10);";
if (mysqli_query($conn,$sql)) {
	echo "Datos insertados en tabla favoritos<br>";
}else{
	die("Error al insertar datos en Tabla favoritos".mysqli_error($conn)."<br>");
}
mysqli_close($conn);
//crear tabla usuarios
$conn=mysqli_connect($servidor,$usuariobd,$passbd,$bd);
$sql="create table usuarios(
		usuario varchar(40) not null,
		contrasena varchar (40) not null,
		nombre varchar (40) not null,
		apellido varchar (40) not null,
		edad int (2),
		permisos int (2)
	)";
if (mysqli_query($conn,$sql)){
	echo "Tabla usuarios creada<br>";
}else{
	die("Error al crear la tabla usuarios".mysqli_error($conn)."<br>");
}
mysqli_close($conn);
//insertar datos de usuario
$conn=mysqli_connect($servidor,$usuariobd,$passbd,$bd);
$sql="insert into usuarios
		values ('admin','admin','Xiomara','Romani',22,1);";
if (mysqli_query($conn,$sql)) {
	echo "Datos insertados en tabla usuarios<br>";
}else{
	die("Error al insertar datos en Tabla usuarios".mysqli_error($conn)."<br>");
}
mysqli_close($conn);
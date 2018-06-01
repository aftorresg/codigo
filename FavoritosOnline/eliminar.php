<?php

require "config.php";
$titulo =$_GET['titulo'];

$sql ="delete from favoritos where titulo='".$titulo."';";

mysqli_query($conn,$sql);
header("location:principal.php");
mysqli_close($conn);

?>
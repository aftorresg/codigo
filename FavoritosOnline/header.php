<!--HEADER-->

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style-menu.css">
	<script src="bootstrap/js/bootstrap.min.js" type="text"></script>
    <script>
    	function redirectPrincipal(){
    		window.top.location.href="principal.php";
    	}
    </script>
<?php
echo "<title>".$title."</title>";
?>	
</head>
<body>
	<div class='navbar navbar-default navbar-static-top' role="navigation">
	<div class='container'>	
<?php
echo "<h1>".$title."</h1>";
?>
</div>
</div>
<div class='container'>

	<?php
     if(isset($_SESSION['nombre'])){
	 include("menu.php");} ?>
  

<?php
	if(isset($_POST['correo'])&& !empty($_POST['correo'])&&
		isset($_POST['correo2'])&& !empty($_POST['correo2'])&&
		$_POST['correo']== $_POST['correo2']){
		header("Location: pregunta1.php");
}else{
	echo "<h1><center>EL CORREO NO ES EL CORRECTO VERIFIQUE E INTENTE DE NUEVO</center></h1>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Correo</title>
</head>
<body background="img/fondo.jpg">
<br><br><br><br>
<center>
	<img src="img/ELIMINAR.png">
</center>
</body>
</html>
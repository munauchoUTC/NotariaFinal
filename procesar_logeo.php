<?php 
include ("conexion.php");
$usu=$_POST['usuario'];
$con=$_POST['contrasena'];


$rs=mysql_query("select * from cuenta_usuario where login_cue='$usu'and password_cue='$con'",$conex);
$idu="";
while($fila=mysql_fetch_array($rs)){
	$idu=$fila['id_usu'];
}
if($idu==""){
	header("Location: error.php");
}

$rs2=mysql_query("select nombre_usu, tipo_usu from usuario where id_usu=$idu",$conex);
$nomu="";
$tipu="";
while($fila2=mysql_fetch_array($rs2)){
	$nomu=$fila2['nombre_usu'];
	$tipu=$fila2['tipo_usu'];
}


session_start();
$_SESSION['idusuario']=$idu;
$_SESSION['nombreusuario']=$nomu;
$_SESSION['tipousuario']=$tipu;


if($tipu=="Administrador"){
	header("Location: http://localhost/NotariaFinal/administrador");

}
 ?>


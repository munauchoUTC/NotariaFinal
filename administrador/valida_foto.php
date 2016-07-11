<?php
include("../conexion.php");
$nom=$_REQUEST["txtnom"];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="fotos/".$foto;
copy($ruta,$destino);
mysql_query("UPDATE usuario SET foto_usu='$destino', nombref_usu='$nom'");
header("Location: perfil.php");
?>

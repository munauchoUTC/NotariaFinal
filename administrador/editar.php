<?php
	include("../conexion.php");
?>
<html lang="es">
<head>
	<title>Notaria Tercera</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Slideshow html" />
	<link href="../css/bootstrap.min.css" rel="stylesheet">
 
	<link href="../css/main.css" rel="stylesheet">
    
 	<link rel="stylesheet" type="text/css" href="../engine1/style.css" />
	<script type="text/javascript" src="../engine1/jquery.js"></script>
    <script src="../js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.scrollUp.min.js"></script>
	<script src="../js/price-range.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/main.js"></script>
    <link rel="stylesheet" href="../css1/estilos.css" />

<script type="text/javascript" src="../js2/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="../js2/jssor.js"></script>
<script type="text/javascript" src="../js2/jssor.slider.js"></script>
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="../engine1/style.css" />
	<script type="text/javascript" src="../engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
</style>
<script type="text/javascript">
function ValidaSoloNumeros() {
   if ((event.keyCode < 48) || (event.keyCode > 57)) 
    event.returnValue = false;
  }
  
function ValidaSoloLetras() {
   if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
    event.returnValue = false;
  
  }
</script>
</head>
<body background="../img/fondo.jpg">
	

<header id="header"><!--header-->
		
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header navbar-fixed-top navbar-inverse">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse navbar-inverse navbar-fixed-top">
								<li class="dropdown"><a href="../logeo.php">Salir Del Sistema</a>
								<li><a href="index.php" class="active">Inicio</a></li>
								                                    
                                </li> 
								
                                <li><a href="perfil.php">Perfil del Administrador</a></li>
                              <li><a href="archivos.php">Busqueda de Archivos</a> 
                                <ul role="menu" class="sub-menu">
                                 <li><a href="donacion.php">Donación</a> </li>
                                 <li><a href="compraventa.php">CompraVenta</a> </li>
                                </ul>                   
                               </li>
                                 <li><a href="registro_usuario.php">Registrar Usuarios</a>
                                    <ul role="menu" class="sub-menu">
                                 <li><a href="actualizacion.php">Actualización de Información de los clientes</a></li>
                                </ul>   
                                </li>
                                <li>
                                	<?php
        $sql=  mysql_query("select nombref_usu,foto_usu from usuario");
        while($res=  mysql_fetch_array($sql)){
            echo '<img src="'.$res["foto_usu"].'" width="50" heigth="80">';
        }

        ?>
                                </li>
                                <li><a href="perfil.php">
                                	<?php 
	session_start(); 
	echo " ".$_SESSION['nombreusuario']."";""
?>
</a>
                                </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
		<br>	

<style type="text/css">
	pre{
		text-align: justify;
		font-family: cambria;
	}
</style>
	</header><!--/header-->
	
	<header>		
		<div class="etiqueta"></div>
		<div class="etiqueta2"></div>
		<!-- Titulo -->
		<div id="titulo">
			<h1>Notaría Tercera de Latacunga</h1>
		</div>
		<!-- Fin titulo -->
	</header>
<br>
<center>
<pre>
	Señor Administrador para cambiar su información usted tiene que ingresar su numero de cédula y de un ENTER , Si usted quiere cambiar su correo o contraseña precione la opción CAMBIAR CUENTA ADMINISTRADOR  
</pre>
</center>
<form method="post">

	<?php 
$var2="";
$var3="";
$var4="";
$var5="";
$var6="";
$var7="";
$var8="";
if (isset($_POST["btn1"])) {
  $btn=$_POST["btn1"];
  $bus=$_POST["cedula"];
if ($btn=="Buscar") {  
 
 $sql="select * from usuario where cedula_usu='$bus'";

$cs=mysql_query($sql,$conex);
while ($fila=mysql_fetch_array($cs)) {
  
  $var2= $fila[2];
  $var3= $fila[3];
  $var4 = $fila[4];
  $var5 = $fila[5];
  $var6 = $fila[6];
  $var7 = $fila[7];
  $var8 = $fila[8];
}
  }

    if ($btn=="Actualizar") {  
 
	$cedula=$_POST["cedula"];
	$nombre=$_POST["nombre"];
	$direccion=$_POST["direccion"];
	$telefono=$_POST["telefono"];
	$genero=$_POST["genero"];
	$email=$_POST["email"];
	$clave=$_POST["clave"];


 $sql="update usuario set nombre_usu='$nombre',direccion_usu='$direccion',telefono_usu='$telefono',
 genero_usu='$genero',email_usu='$email',clave_seguridad_usu='$clave'
 where cedula_usu='$cedula'";

$cs=mysql_query($sql,$conex);

echo "<script>alert('SE A CAMBIADO DE ADMINISTRADOR GRACIAS :)');</script>";
  }
}

?>
    
		        <div  style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
		                    <div class="panel panel-info" style="background: rgba(255, 255, 255, .9);">
		                        <div class="panel-heading">
		                            <div class="panel-title"><b><center>CAMBIO O MODIFICACIÓN DE DATOS DEL  ADMINISTRADOR DEL SISTEMA</center></b>   
		                        
		                         </div>
		                        </div>  
		                        <div class="panel-body" >
		                                
		                                  <br>
		                                  <div class="form-group" style="margin-bottom: 25px">
		                                	 <label for="email" class="col-md-3 control-label">Cédula:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" id="email" maxlength="10" minlength="10" class="form-control" data-minlength="10" onkeypress="ValidaSoloNumeros();" name="cedula" placeholder="Ingrese su cédula" value="<?php echo $var2 ?>" value="" required/><br>
		                                        <p class="error" style="color: red; font-weight: bold;">
												</p>
												
		                                    </div>
		                                </div>
		                                <br>
		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Nombres:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" onkeypress="ValidaSoloLetras();" id="password" class="form-control" name="nombre" value="<?php echo $var3 ?>" placeholder="Sus nombres">
		                                   	<p class="error" style="color: red; font-weight: bold;">
												
												</p>
		                                    </div>
		                                </div>
		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Dirección:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" id="password" class="form-control" name="direccion" value="<?php echo $var4 ?>" placeholder="Su dirección">
		                                   		<p class="error" style="color: red; font-weight: bold;">
												</p>
		                                    </div>
		                                </div>
		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Telefono:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" id="password" maxlength="10" class="form-control" name="telefono" data-minlength="10" onkeypress="ValidaSoloNumeros();"  value="<?php echo $var5 ?>" placeholder="Su Telefono">
		                                    	<p class="error" style="color: red; font-weight: bold;">
												</p>
		                                    </div>
		                                </div>
		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Género:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" id="password" onkeypress="ValidaSoloLetras();" class="form-control" name="genero" value="<?php echo $var6 ?>" placeholder="Su Género">
		                                   	<p class="error" style="color: red; font-weight: bold;">
												</p>
		                                    </div>
		                                </div>
		                                  <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Email:</label>
		                                    <div class="col-md-9">
		                                        <input type="email" id="password" class="form-control" name="email" value="<?php echo $var7 ?>"placeholder="Su Email">
		                                    	<p class="error" style="color: red; font-weight: bold;">
												</p>
		                                    </div>
		                                </div>
		                                  <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Clave de seguridad:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" id="password" class="form-control" name="clave" value="<?php echo $var8 ?>" placeholder="Su clave">
		                                   	<p class="error" style="color: red; font-weight: bold;">
												</p>
		                                    </div>
		                                </div>
		                                <br>
		                       				
		                       				<div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label"></label>
		                                    <div class="col-md-9">
		                                       
												<p class="error" style="color: red; font-weight: bold;">
												
												</p>
											
		                                    </div>
		                                </div>
		                       
		                                <script type="text/javascript">
		                                function cambiar(){
		                                	alert("Ingresando a cambiar sus cuentas de usuario :)");
		                                }
		                                </script>

										<br>
		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <!-- Button -->                                        
		                                    <div class="col-md-offset-3 col-md-9">
		                                        <button id="btn-signup" type="submit" class="btn btn-primary" name="btn1" value="Buscar"><b>Buscar Administrador</b></button>
		                                        <button id="btn-signup" type="submit" class="btn btn-primary" name="btn1" value="Actualizar" ><b>Guardar Información</b></button>
		                                        <a href="cuenta_ad.php"><button id="btn-signup" type="button" class="btn btn-primary" onClick="cambiar();"><b>Cambiar Cuenta Administrador</b></button></a>
		                                    </div>
		                                    
		                                </div>
		                    
		                 
		                         </div>
		                    </div>
		
		               
		               
		                
		         </div> 
</form>	         
		 


 
  


<br><br><br>

 <footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>NOTARIA </span> TERCERA</h2>
							
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="../img/nota10.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Doctor</p>
								<h2>JOSÉ LEÓN</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="../img/not1.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Secretario</p>
								<h2> DE LA NOTARIA</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="../img/notaria2.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Notaria</p>
								<h2>TERCERA</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="../img/nota4.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Secretaria</p>
								<h2>DE LA NOTARIA</h2>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2016</p>
					<p class="pull-right">Diseñado por: Carrera Anderson || Unaucho Maria || Lozada Cristina<span><a target="_blank"></a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	     




</body>
</html>


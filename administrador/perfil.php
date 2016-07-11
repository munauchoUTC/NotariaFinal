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
<style type="text/css">
	pre{
		text-align: justify;
		font-family: cambria;
	}
</style>
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
	echo "".$_SESSION['nombreusuario']."";""
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
		<center>Señor Administrador para proceder a cambiar su foto de perfíl tenga en consideración lo siguiente:</center>
		1.-Precione la opcion SELECCIONAR que se encuentra en el formulario 
		2.-Una ves que usted selecciono precione la opcion SUBIR
		<font color="black">NOTA:</font>Si usted precióna primero la opción SUBIR se subira una foto vacia 
	</pre>
</center>
<center>
<?php
        $sql=  mysql_query("select nombref_usu,foto_usu from usuario");
        while($res=  mysql_fetch_array($sql)){
           
            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="'.$res["foto_usu"].'" width="200" heigth="200"><br>';
        }
 ?>
</center>




<script type="text/javascript">
function editar(){
	alert("Ingresando a editar los datos del ADMINISTRADOR");
}
</script>



<center>

</center>


<form action="valida_foto.php" method="POST" enctype="multipart/form-data">
<?php

$sql=  mysql_query("select * from usuario");
        while($res=  mysql_fetch_array($sql)){
        	$var9= $res[9];
        	$var2= $res[2];
            $var3= $res[3];
            $var4= $res[4];
            $var5= $res[5];
            $var6= $res[6];
            $var7= $res[7];
            $var8= $res[8];
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
		                                	 <label for="email" class="col-md-3 control-label">Típo de Usuario:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" name="tipo"  class="form-control" value="<?php echo $var9 ?>" readonly><br>
		                                        <p class="error" style="color: red; font-weight: bold;">
												</p>
												
		                                    </div>
		                                </div>
		                                <br>
		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Cédula:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" name="cedula" class="form-control" value="<?php echo $var2 ?>" readonly>
		                                   	<p class="error" style="color: red; font-weight: bold;">
												
												</p>
		                                    </div>
		                                </div>
		                                 <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Nombres:</label>
		                                    <div class="col-md-9">
		                                        <input input type="text" name="tipo" class="form-control" value="<?php echo $var3 ?>" readonly>
		                                   	<p class="error" style="color: red; font-weight: bold;">
												
												</p>
		                                    </div>
		                                </div>
		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Dirección:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" id="password" class="form-control" name="direccion" value="<?php echo $var4 ?>" readonly>
		                                   		<p class="error" style="color: red; font-weight: bold;">
												</p>
		                                    </div>
		                                </div>
		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Teléfono:</label>
		                                    <div class="col-md-9">
		                                        <input type="number" id="password" class="form-control" name="telefono" value="<?php echo $var5 ?>" readonly>
		                                    	<p class="error" style="color: red; font-weight: bold;">
												</p>
		                                    </div>
		                                </div>
		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Género:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" id="password" class="form-control" name="genero" value="<?php echo $var6 ?>" readonly>
		                                   	<p class="error" style="color: red; font-weight: bold;">
												</p>
		                                    </div>
		                                </div>
		                                  <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Email:</label>
		                                    <div class="col-md-9">
		                                        <input type="email" id="password" class="form-control" name="email" value="<?php echo $var7 ?>" readonly>
		                                    	<p class="error" style="color: red; font-weight: bold;">
												</p>
		                                    </div>
		                                </div>
		                                  <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Clave de seguridad:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" id="password" class="form-control" name="clave" value="<?php echo $var8 ?>" readonly>
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
		                       function editar(){
		                       		alert("Ingresando a editar sus datos :)");
		                       }
		                       </script>
		                                	
										<br>
		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <!-- Button -->                                        
		                                    <div class="col-md-offset-3 col-md-9">
		                                       <input type="file" name="foto" class="btn btn-primary" style="cursor:pointer;">
		                                       <input type="submit" class="btn btn-primary" style="cursor:pointer;" name="enviar" value="Subir"> 
		                                        <a href="editar.php"><button id="btn-signup" type="button" class="btn btn-primary" onClick="editar();"><b>Editar Información</b></button></a>
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


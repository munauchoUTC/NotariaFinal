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
<br><br>


			<section>
				<h3>Sistema de Gestión de Archivos de la Notaría Tercera</h3>
				
		<center>
		
					<?php
        $sql=  mysql_query("select foto_usu from usuario");
        while($res=  mysql_fetch_array($sql)){
            echo '<img src="'.$res["foto_usu"].'" width="170" heigth="170"><br>';
        }
        ?>
     
</center>
<?php 

	echo "<h4>".$_SESSION['nombreusuario']."</h4>";""
?>


				<h4>BIENVENIDO SEÑOR ADMINISTRADOR</h4>
				
				
				<center>
				<h5>Dirección</h5>
				<p>
					La NOTARÍA TERCERA se encuentra atendiendo en la Calle Quito 1313 Y Tarqui 
					Esq.Diagonal Al Gal Provincial De Cotopaxi A las Oficinas del IESS
				</p>
</center>
			</section>



















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


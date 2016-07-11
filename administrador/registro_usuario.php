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
		<br>	

<style type="text/css">
	pre{
		text-align: justify;
		font-family: cambria;
	}
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

<center>
	
</center>




<script type="text/javascript">
function editar(){
	alert("Ingresando a editar los datos del ADMINISTRADOR");
}
</script>



<center>

</center>

<?php
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $cedula= $_POST['cedula'];
            $nombres= $_POST['nombre'];
            $apellidos= $_POST['apellidos'];
            $fechaN= $_POST['fechaN'];
            $genero= $_POST['genero'];
            $direccion= $_POST['direccion'];
            $estadoci= $_POST['estadoci'];
            $tipoes= $_POST['tipoes'];
            $otorgada= $_POST['otorgada'];
            $nuevodu= $_POST['nuevodu'];
            $db=new Conect_MySql();
            $sql = "INSERT INTO cliente(cedula_cli,nombre_cli,apellido_cli,fecha_nacimiento_cli,genero_cli,direccion_cli,
            	estado_civil_cli,tipo_escritura_cli,otorgacion_cli,dueno_cli,tamanio,
            	tipo,nombre_archivo) VALUES('$cedula','$nombres','$apellidos','$fechaN','$genero','$direccion',
            	'$estadoci','$tipoes','$otorgada','$nuevodu','$tamanio','$tipo','$nombre')";
            $query = $db->execute($sql);
            if($query){
                echo "El usuario ya esta registrado en el sistema";
            }
        } else {
            echo "El usuario no se registro correctamente";
        }
    }
}
?>


<form method="post" action="" enctype="multipart/form-data">

    
		        <div  style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
		                    <div class="panel panel-info" style="background: rgba(255, 255, 255, .9);">
		                        <div class="panel-heading">
		                            <div class="panel-title"><b><center>REGISTRO DE USUARIOS CON SU RESPECTIVA ESCRITURA</center></b>   
		                        
		                         </div>
		                        </div>  
		                        <div class="panel-body" >
		                                
		                                  <br>
		                                  <div class="form-group" style="margin-bottom: 25px">
		                                	 <label for="email" class="col-md-3 control-label">Cedula:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" name="cedula" maxlength="10" class="form-control" data-minlength="10" onkeypress="ValidaSoloNumeros();" placeholder="Cédula" required/><br>
		                                        <p class="error" style="color: red; font-weight: bold;">
												</p>
												
		                                    </div>
		                                </div>
		                                <br>
		                                
		                                 <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Nombres:</label>
		                                    <div class="col-md-9">
		                                        <input input type="text" name="nombre" class="form-control" onkeypress="ValidaSoloLetras();" placeholder="Nombres " required/>
		                                   	<p class="error" style="color: red; font-weight: bold;">
												
												</p>
		                                    </div>
		                                </div>

		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Apellidos:</label>
		                                    <div class="col-md-9">
		                                        <input input type="text" name="nombre" class="form-control" onkeypress="ValidaSoloLetras();" placeholder="Apellidos" required/>
		                                   	<p class="error" style="color: red; font-weight: bold;">
												
												</p>
		                                    </div>
		                                </div>
		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">F.Nacimiento:</label>
		                                    <div class="col-md-9">
		                                        <input type="date" id="password" class="form-control" name="fechaN" required/>
		                                   		<p class="error" style="color: red; font-weight: bold;">
												</p>
		                                    </div>
		                                </div>
		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Genero:</label>
		                                    <div class="col-md-9">
		                                        <select id="password" class="form-control" name="genero">
		                                        	<option>Seleccionar</option>
		                                        	<option>Masculino</option>
		                                        	<option>Femenino</option>
		                                        </select>
		                                    	<p class="error" style="color: red; font-weight: bold;">
												</p>
		                                    </div>
		                                </div>
		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Dirección:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" id="password" class="form-control" name="direccion" placeholder="Dirección" required/>
		                                   	<p class="error" style="color: red; font-weight: bold;">
												</p>
		                                    </div>
		                                </div>
		                                  <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Estado Civíl:</label>
		                                    <div class="col-md-9">
		                                        <select id="password" class="form-control" name="estadoci">
		                                        	<option>Seleccionar</option>
		                                        	<option>Soltero</option>
		                                        	<option>Casado</option>
		                                        	<option>Viudo</option>
		                                        	<option>Divorciado</option>
		                                        	<option>Unión Libre</option>
		                                        </select>
		                                    	<p class="error" style="color: red; font-weight: bold;">
												</p>
		                                    </div>
		                                </div>
		                                  <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Tipo de Escritura</label>
		                                    <div class="col-md-9">
		                                        <select id="password" class="form-control" name="tipoes">
		                                        	<option>Seleccionar</option>
		                                        	<option>Donación</option>
		                                        	<option>CompraVenta</option>
		                                        </select>
		                                   	<p class="error" style="color: red; font-weight: bold;">
												</p>
		                                    </div>
		                                </div>
		                                 <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Otorgada por:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" id="password" class="form-control" name="otorgada" onkeypress="ValidaSoloLetras();" placeholder="Ex dueño de la Escritura" required/>
		                                   	<p class="error" style="color: red; font-weight: bold;">
												</p>
		                                    </div>
		                                </div>
		                                 <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Nuevo Dueño:</label>
		                                    <div class="col-md-9">
		                                        <input type="text" id="password" class="form-control" name="nuevodu"  onkeypress="ValidaSoloLetras();" placeholder="Nuevo Dueño" required/>
		                                   	<p class="error" style="color: red; font-weight: bold;">
												</p>
		                                    </div>
		                                </div>
		                                 <div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label">Subir una Escritura</label>
		                                    
		                                </div>
		                                <br>
		                       				
		                       				<div class="form-group" style="margin-bottom: 25px">
		                                    <label class="col-md-3 control-label"></label>
		                                    <div class="col-md-9">
		                                       
												<p class="error" style="color: red; font-weight: bold;">
												
												</p>
											
		                                    </div>
		                                </div>
		                       
		                                	
										<br>
		                                <div class="form-group" style="margin-bottom: 25px">
		                                    <!-- Button -->                                        
		                                    <div class="col-md-offset-3 col-md-9">
		                                      
		                                    	<input type="file" name="archivo" class="btn btn-primary" >
		                                    	<input type="submit" value="subir" name="subir" class="btn btn-primary" > 
		                                    	<a href="lista.php">ESCRITURAS REGISTRADAS</a>
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


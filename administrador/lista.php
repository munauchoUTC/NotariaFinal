<?php
    include("../conexion.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
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
    </header><!--/header-->
  
    <header>        
        <div class="etiqueta"></div>
        <div class="etiqueta2"></div>
        <!-- Titulo -->
        <div id="titulo">
            <h1>Listado de Usuarios con sus Respectivas Escrituras</h1>
        </div>

        
        <!-- Fin titulo -->
    </header>

<br><br>
<center>
        <table border="4">
            <tr>
                <th>Cédula</th>
                <th>Dueño de la Escritura</th>
                <th>Tipo de Escritura</th>
                <th>Otorgado por</th>
                <th>Escritura</th>
            </tr>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select*from cliente";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
                <td><?php echo $datos['cedula_cli']; ?></td>
                <td><?php echo $datos['nombre_cli']; ?></td>
                <td><?php echo $datos['tipo_escritura_cli']; ?></td>
                <td><?php echo $datos['otorgacion_cli']; ?></td>
                <td><a href="archivo.php?id=<?php echo $datos['id_cli']?>"><?php echo $datos['nombre_archivo']; ?></a></td>
            </tr>
                
          <?php  } ?>
            
        </table>
        </center>
    </body>
</html>

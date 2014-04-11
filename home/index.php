<?php
    include('../librerias/SessionManager.php');
    include('../sesion/controlSesion.php');
    echo ControlSesion::verificarSiLogeado();                                 
    $rolUsuario = ControlSesion::obtenerRolDelUsuario($_SESSION['rol']); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Home</title>
        <script type="text/javascript" src="../js/jquery-2.1.0.js"></script>
        <script type="text/javascript" src="js/funciones.js"></script>
        <link rel="stylesheet" href="../css/style.css" />
    </head>
    <body>
        <div id="cabecera">
            <?php 
            include("includes/cabecera".$rolUsuario.".php");
            ?>
        </div>
        <div id="cuerpo">
            <?php 
            include("includes/cuerpo".$rolUsuario.".php");
            ?>
        </div>
        <div id="pie">
            <?php 
            include("includes/pie.php");
            ?>
        </div>
    </body>
</html>
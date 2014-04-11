<?php
    include('sesion/controlSesion.php');
    //echo ControlSesion::verificarSiLogeado();  
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Acceso al Sistema</title>
        <script type="text/javascript" src="js/jquery-2.1.0.js"></script>
        <script type="text/javascript" src="js/funciones-login.js"></script>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <div id="cabecera">
            <?php 
            include("includes/cabeceraLogin.php");
            ?>
        </div>
        <div id="cuerpo">
            <?php 
            include("includes/widgetLogin.php");
            ?>
        </div>
        <div id="pie">
            <?php 
            include("includes/pieLogin.php");
            ?>
        </div>
    </body>
</html>

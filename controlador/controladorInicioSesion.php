<?php
    include("../conexion/conexion.php");
    include("../daos/UsuarioDao.php");
    
    $username = $_POST["user"];
    $password = $_POST["pass"];
    $caso = $_POST["caso"];

    switch ($caso) 
    {
        case 1:
                $resp = UsuarioDao::iniciarSesionUsuario($username, $password);
                if ($resp > 0){
                    //redirigir a donde corresponda.
                    echo $resp;
                }else{
                    echo error($resp);
                }
                
        break;

    }
    
    function error($id){
        switch ($id){
        case -1:
                    return "E-1: Error de conexion a BD.";
            break;
        case -2:
                    return "Usuario inexistente.";
            break;
        case -3:
                    return "Contraseña incorrecta";
            break;
        }
    }
?>


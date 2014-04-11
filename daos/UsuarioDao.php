<?php

class UsuarioDao {
    
    public function iniciarSesionUsuario($username, $password) 
        {
            $coneccion = Conexion::getDbConnection();
            $sql = "select * from usuario where username = '".$username."';";
            $accion = mysql_query($sql);
            if (!$accion)
                {
                    return -1;
                }
            else
                {
                    if (mysql_num_rows($accion) > 0)
                        {
                            $sql1 = "select id,rol from usuario where username = '".$username."' and password = '".$password."';";
                            $accion1 = mysql_query($sql1);
                            if (!$accion1)
                                {
                                    return -2;
                                }
                            else
                                {
                                    if (mysql_num_rows($accion1) > 0)
                                        {
                                            $row = mysql_fetch_array($accion);
                                            include('../librerias/SessionManager.php');
                                            $session = new session();
                                            // Set to true if using https
                                            $session->start_session('_s', false);

                                            $_SESSION['id'] = $row['id'];
                                            $_SESSION['rol'] = $row['rol'];
                                            $_SESSION['estado'] = 'ok';
                                            return $_SESSION['id'];
                                        }
                                    else
                                        {
                                           return -3;
                                        }
                                }
                        }
                    else
                        {
                            return -2;
                        }
                }
            
        }
    
    
}

?>


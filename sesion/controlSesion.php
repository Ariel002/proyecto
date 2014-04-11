<?php

class ControlSesion{
    
    public function verificarSiLogeado() {
        $session = new session();
        // Set to true if using https
        $session->start_session('_s', false);  
        if (!isset($_SESSION['estado'])){
            $volverA = $_SERVER['HTTP_HOST'];
            ?>
                <script type="text/javascript">
                    alert("No has iniciado sesion!!.");
                </script>
                
            <?php
            header('Location: /proyecto/index.php');
        }
    }
    
    public function obtenerRolDelUsuario($rol) {
        switch ($rol){
            case 1:
                    return "Administrador";
                break;
        }
    }
    
}
    
?>

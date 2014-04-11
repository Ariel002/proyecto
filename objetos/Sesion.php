<?php
    class Sesion 
	{        
            private $idUser;
            private $NombreUser;
            private $rol;
            private $clave;
            private $colegio;
            private $tema;
            private $estado;
            private $tiempoInicio;
            private $codigoSesion;
            private $curriculum; 

            public static function getIdUser()
            {
                return $_SESSION['id'];
            }

            public static function getRol()
            {
                return $_SESSION['rol'];
            }

            public static function getClave()
            {
                return $_SESSION['pass'];
            }

            public static function getColegio()
            {
                return $_SESSION['colegio'] ;
            }

            public static function getTiempoInicio()
            {
                return $_SESSION['tiempoInicio'];
            }

            public static function getCodigoSesion()
            {
                return $_SESSION['codigoSesion'] ;
            }

            public static function getTema()
            {
                return $_SESSION['tema'];
            }		

            public static function getEstado()
            {
                return $_SESSION['estado'] ;
            }

            public static function getNombreUser()
            {
                return $_SESSION['user'];
            }

            public static function getCurriculum()
            {
                return $_SESSION['curriculum'];
            }
        }
?>


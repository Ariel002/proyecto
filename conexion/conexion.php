<?php

class Conexion
{   
    public function __construct($host,$user,$pass,$dbname)
    {
        $this->connection = mysql_connect($host, $user, $pass);
        mysql_select_db($dbname, $this->connection);
        mysql_query("SET CHARACTER SET utf8");
        mysql_query("SET NAMES utf8");
    }  
	
    public static function getDbConnection()
    {
	$BBDD = "mydb";		
        $host = "localhost";
        $user = "root";
        $pass = "asga1984";
        $dbname = $BBDD;
        $connection = mysql_connect($host,$user,$pass);
        mysql_select_db($dbname, $connection);
        mysql_query("SET CHARACTER SET utf8");
        mysql_query("SET NAMES utf8");
        return $connection;
    }
	
}

?>



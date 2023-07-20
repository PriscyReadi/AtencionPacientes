<?php
class db{
 
 static function conexion(){  
    $host = "localhost";
    $dbname = "db_atencionPacientes";
    $user = "atencionPacientes";
    $password = "atencionPacientes"; 
      
            try{
                $conexion = new PDO("mysql:host =".$host.";dbname=".$dbname.";charset=utf8mb4", $user,$password );
                return $conexion;
                }catch(PDOException $e){
                return $e->getMessage();
                }
    }
}     
?>


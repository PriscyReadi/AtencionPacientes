<?php
    class ConsultapacienteModel_model{
        private $PDO;
        public function __construct(){
          require_once("../config/db.php");
            $con = new db();
            $this->PDO = $con::conexion();
        }

        public function showComMasPac(){
          $stament = $this->PDO->prepare("SELECT a.idConsulta, COUNT(a.idAtencion) as nroConsultas, 
          c.nomConsulta FROM `atencion` a inner join consulta c on (a.idConsulta = c.idConsulta) GROUP BY idConsulta order by nroConsultas DESC limit 1;");
          return ($stament->execute()) ? $stament->fetchAll() : false;
        }
    }
?>

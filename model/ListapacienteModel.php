<?php
    class ListasrpacienteModel_model{
        private $PDO;
        public function __construct(){
          require_once("../config/db.php");
            $con = new db();
            $this->PDO = $con::conexion();
        }
        public function showPacientes(){
          $stament = $this->PDO->prepare("SELECT p.nombrePaciente, p.edadPaciente, p.noHistCli, p.idRiesgo, p.estadoPaciente, p.idPaciente FROM paciente p WHERE p.estadoPaciente = 1 OR p.estadoPaciente = 2 ORDER BY p.estadoPaciente ASC, p.idRiesgo DESC, p.idPaciente ASC");
          return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function updateListaPacientes(){
         // $stament = $this->PDO->prepare("SELECT ROW_NUMBER() OVER(order BY p.idRiesgo DESC) AS row_num , p.nombrePaciente, p.edadPaciente, p.noHistCli, p.idRiesgo, p.estadoPaciente, p.idPaciente FROM paciente p WHERE p.estadoPaciente > 0 ORDER BY p.idRiesgo DESC");
         $stament = $this->PDO->prepare("SELECT ROW_NUMBER() OVER(order BY p.idRiesgo DESC) AS row_num , p.nombrePaciente, p.edadPaciente, p.noHistCli, p.idRiesgo, p.estadoPaciente, p.idPaciente FROM paciente p WHERE p.estadoPaciente = 1 OR p.estadoPaciente = 2 ORDER BY p.idRiesgo DESC , p.tipoPaciente ASC, p.idPaciente ASC;"); 
         return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function countPasEspera(){
          $stament = $this->PDO->prepare("SELECT COUNT(IdPaciente) FROM paciente where estadoPaciente = 1;");
          return ($stament->execute()) ? $stament->fetch() : false;
        }

        public function nextPasPendiente(){
          $stament = $this->PDO->prepare("SELECT p.idPaciente FROM paciente p WHERE p.estadoPaciente = 2 ORDER BY p.estadoPaciente ASC, p.idRiesgo DESC, p.idPaciente ASC LIMIT 3;");
          return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function nextPasPendienteOptimizado(){
          $stament = $this->PDO->prepare("SELECT p.idPaciente FROM paciente p WHERE p.estadoPaciente = 2 ORDER BY p.idRiesgo DESC, p.tipoPaciente ASC, p.idPaciente ASC LIMIT 3;");
          return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function updateEstadoPaciente($idPaciente){
          $stament = $this->PDO->prepare("UPDATE paciente SET estadoPaciente = 1 WHERE idPaciente= ".$idPaciente.";");
          return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
          
        }
    }
?>

<?php
    class PacientemasancianoModel_model{
        private $PDO;
        public function __construct(){
          require_once("../config/db.php");
            $con = new db();
            $this->PDO = $con::conexion();
        }

        public function showPasMasAnciano(){
            //muestra paciente mas anciano por atender (estadoPaciente = 1) 
          $stament = $this->PDO->prepare("SELECT p.nombrePaciente, p.edadPaciente, p.idRiesgo, p.noHistCli, a.conDieta FROM `pAnciano` a INNER JOIN paciente p ON (a.idPaciente = p.idPaciente) WHERE p.estadoPaciente = 1 ORDER BY p.edadPaciente DESC LIMIT 1;");
          return ($stament->execute()) ? $stament->fetchAll() : false;
        }
    }
?>

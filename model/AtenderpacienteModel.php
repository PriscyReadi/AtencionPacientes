<?php
    class AtenderpacienteModel_model{
        private $PDO;
        public function __construct(){
          require_once("../config/db.php");
            $con = new db();
            $this->PDO = $con::conexion();
        }
        public function showAtencion(){
            //listar consultas activas con información de atención
          $stament = $this->PDO->prepare("SELECT c.idConsulta, c.nomConsulta, c.estadoConsulta, c.idEspecialista, c.idTipoConsulta, (SELECT e.nomEspecialista FROM atencion a INNER JOIN especialista e ON (a.idEspecialista = e.idEspecialista) WHERE a.idConsulta = c.idConsulta AND a.estadoAtencion = 1), (SELECT p.nombrePaciente FROM atencion a INNER JOIN paciente p ON (a.idPaciente = p.idPaciente) WHERE a.idConsulta = c.idConsulta AND a.estadoAtencion = 1) FROM consulta c where c.estadoConsulta <2 ORDER BY c.idConsulta");
          //SELECT c.idConsulta, c.nomConsulta, e.nomEspecialista, p.nombrePaciente, c.EstadoConsulta, a.estadoAtencion FROM atencion a LEFT JOIN consulta c on (a.idConsulta = c.idConsulta) LEFT JOIN especialista e ON (a.idEspecialista = e.idEspecialista) LEFT JOIN paciente p ON (a.idPaciente = p.idPaciente) WHERE a.estadoAtencion <> 2;
          return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function findPaciente(){
          //buscar pacienten espera con mayor prioridad
          //$stament = $this->PDO->prepare("SELECT idPaciente FROM paciente p WHERE p.estadoPaciente<>0 ORDER BY p.estadoPaciente DESC, p.idPaciente DESC LIMIT 1");
          $stament = $this->PDO->prepare("(SELECT p.idPaciente FROM paciente p WHERE p.estadoPaciente = 1 ORDER BY p.idRiesgo DESC , p.idPaciente ASC) UNION (SELECT p.idPaciente FROM paciente p WHERE p.estadoPaciente = 2 ORDER BY p.idRiesgo DESC , p.idPaciente ASC) LIMIT 1;");
          return ($stament->execute()) ? $stament->fetch() : false;
        }
        public function updateAtencion($idConsulta, $idEspecialista, $idTipoConsulta, $idPaciente){
          //inserta en la tabla atención para el historial
          $stament = $this->PDO->prepare(
            "INSERT INTO atencion VALUES (NULL," .$idConsulta.", ".$idEspecialista.",".$idTipoConsulta.",". $idPaciente.", 1)");
          return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function freeAtencion(){
          //inserta en la tabla atención para el historial
          $stament = $this->PDO->prepare("UPDATE atencion SET estadoAtencion = 2");
          return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function updateAllPaciente(){
          //Actualizo el estado de todos los pacientes de Atendiendo = 3 a Atendido = 0 al liberar consultas
          $stament = $this->PDO->prepare("UPDATE paciente SET estadoPaciente = 0 WHERE estadoPaciente = 3");
          return ($stament->execute()) ? true : false ;
        }
        public function updatePaciente($idPaciente, $idEstado){
          $stament = $this->PDO->prepare("UPDATE paciente SET estadoPaciente = ".$idEstado." WHERE idPaciente =".$idPaciente);
          return ($stament->execute()) ? true : false ;
        }
        public function updateConsulta($idConsulta, $estConsulta){
          $stament = $this->PDO->prepare("UPDATE consulta SET estadoConsulta = ".$estConsulta." WHERE idConsulta =".$idConsulta);
          return ($stament->execute()) ? true : false ;
        }
        public function freeConsultas(){
          $stament = $this->PDO->prepare("UPDATE consulta SET estadoConsulta = 0 WHERE estadoConsulta = 1");
          return ($stament->execute()) ? true : false ;
        }
      
    }
?>

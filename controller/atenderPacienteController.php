<?php
    class atenderPacienteController{
        private $model;
        public function __construct(){
            require_once("../model/AtenderpacienteModel.php");
            $this->model = new AtenderpacienteModel_model();
        }
        public function verAtencion(){  
            return ($this->model->showAtencion()) ? $this->model->showAtencion() : false; 
        }
        public function actualizaTodoPaciente(){
            return ($this->model->updateAllPaciente() != false) ? header("Location:listarPaciente.php") : header("Location:listarPaciente.php"); 
        }
        public function buscarPaciente(){  
            return ($this->model->findPaciente()) ? $this->model->findPaciente() : false; 
        }
        public function buscarPacienteOptimizado(){  
            return ($this->model->findPacienteOptimizado()) ? $this->model->findPacienteOptimizado() : false; 
        }
        public function actualizarPaciente($idPaciente, $idEstado){
            return ($this->model->updatePaciente($idPaciente, $idEstado) != false) ? header("Location:listarPaciente.php") : header("Location:listarPaciente.php"); 
        }
        public function atender($idConsulta, $idEspecialista, $idTipoConsulta, $idPaciente){
            return ($this->model->updateAtencion($idConsulta, $idEspecialista, $idTipoConsulta, $idPaciente) != false) ? header("listarPaciente.php") : header("Location:listarPaciente.php");
        }
        public function ActualizaAtencion(){
            return ($this->model->freeAtencion() != false) ? header("Location:listarPaciente.php") : header("Location:listarPaciente.php");
        }
        public function actualizarConsulta($idConsulta, $idEstConsulta){
            return ($this->model->updateConsulta($idConsulta, $idEstConsulta) != false) ? header("Location:listarPaciente.php") : header("Location:listarPaciente.php");
        }
        public function liberarConsulta(){
            return ($this->model->freeConsultas() != false) ? header("Location:listarPaciente.php") : header("Location:listarPaciente.php");
        }
    }
?>
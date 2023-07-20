<?php
    class listarPacienteController{
        private $model;
        public function __construct(){
            require_once("../model/ListapacienteModel.php");
            $this->model = new ListasrpacienteModel_model();
        }
        public function verPacientes(){  
            return ($this->model->showPacientes()) ? $this->model->showPacientes() : false; 
        }
        public function ordenarListaPacientes(){  
            return ($this->model->updateListaPacientes()) ? $this->model->updateListaPacientes() : false;
          
        }
        public function cantPacientesEspera(){  
            return ($this->model->countPasEspera()) ? $this->model->countPasEspera() : false; 
        }
        public function proxPacientePendiente(){  
            return ($this->model->nextPasPendiente()) ? $this->model->nextPasPendiente() : false;
        }
        public function proxPacientePendienteOptimizado(){  
            return ($this->model->nextPasPendienteOptimizado()) ? $this->model->nextPasPendiente() : false;
        }
        public function actualizaPacientePendiente($idPaciente){  
            return ($this->model->updateEstadoPaciente($idPaciente)) ? $this->model->updateEstadoPaciente($idPaciente) : false;
        }
        
    }
?>
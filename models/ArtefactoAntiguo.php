<?php

    class ArtefactoAntiguo extends EntidadEstelar implements iInteractuable{

        private $antiguedad;

        public function __construct($id, $nombre, $planetaOrigen, $nivelEstabilidad, $antiguedad){
            parent::__construct($id, $nombre, $planetaOrigen, $nivelEstabilidad);
            $this->antiguedad=$antiguedad;
        }

        public function getAntiguedad(){
                return $this->antiguedad;
            }

        public function reaccionar(){
            return "Reproduce un mensaje en una lengua muerta";
        }
        public function setAntiguedad($antiguedad) {
            $this->antiguedad = $antiguedad;
        }
    }
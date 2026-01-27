<?php

    class MineralRaro extends EntidadEstelar implements iInteactuable{

        private $dureza;

        public function __construct($id, $nombre, $planetaOrigen, $nivelEstabilidad, $dureza){
            parent::__construct($id, $nombre, $planetaOrigen, $nivelEstabilidad);
            $this->dureza=$dureza;
        }

        public function getDureza(){
                return $this->dureza;
            }

        public function reaccionar(){
            return "Brilla con intensidad azulada";
        }
    }
<?php

    class FormaVida extends EntidadEstelar implements igestor{

        private $dieta;

        public function __construct($id, $nombre, $planetaOrigen, $nivelEstabilidad, $dieta){
            parent::__construct($id, $nombre, $planetaOrigen, $nivelEstabilidad)
            $this->dieta=$dieta
        }
    }
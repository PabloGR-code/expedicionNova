<?php

    interface iGestor {
        public function obtenerTodos();

        public function guardar($entidad);

        public function eliminar($id);

        public function editar($id,$name, $planet, $level, $extra);

        public function buscar($id);
    }
<?php

    interface iGestor {
        public function obtenerTodos();

        public function guardar();

        public function eliminar();

        public function editar();

        public function buscar();
    }
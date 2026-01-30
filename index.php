<?php
require_once "autoloader.php";
session_start();

$controller = new controller();

$accion = $_GET['accion'] ?? 'index';

switch ($accion) {
    case 'obtenerTodos':
        $controller->obetenerTodos();
    case 'guardar':
        $controller->guardar();
        break;
    case 'eliminar':
        $controller->eliminar();
        break;
    case 'buscar':
        $controller->buscar();
        break;
    case 'editar':
        $controller->editar();
        break;
    default:
        $controller->index();
}
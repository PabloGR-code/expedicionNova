<?php
require_once "autoloader.php";
session_start();


$gestor = new GestorEntidad();
$controller = new Controller($gestor);

$accion = $_GET['accion'] ?? 'index';

switch ($accion) {
    case 'obtenerTodos':
        $controller->obtenerTodos();
        break;

    case 'guardar': 
        $controller->guardar($_POST);
        break;
        
    case 'eliminar':
        $controller->eliminar($_GET['id'] ?? null);
        break;

    case 'buscar':
        $controller->buscar($_GET['id'] ?? null);
        break;

    case 'editar':
        $controller->editar($_POST);
        break;

    default:
        $controller->index();
}

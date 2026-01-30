<?php
require_once "autoloader.php";
session_start();

$gestor=new GestorEntidad();
$controller = new controller($gestor);

$accion = $_GET['accion'] ?? 'index';

switch ($accion) {
    case 'obtenerTodos':
        $controller->obtenerTodos();
    case 'guardar':
        $controller->guardar($_POST);
        break;
    case 'eliminar':
        $controller->eliminar($_GET[$id]);
        break;
    case 'buscar':
        $controller->buscar($_GET[$id]);
        break;
    case 'editar':
        $controller->editar($_POST);
        break;
    default:
        $controller->obtenerTodos();
}
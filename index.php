<?php
require_once "autoload.php";
session_start();

$controller = new ControllerEntidades();

$accion = $_GET['accion'] ?? 'index';

switch ($accion) {
    case 'registro':
        $controller->registro();
        break;
    case 'modificar':
        $controller->modificacion();
        break;
    case 'expulsar':
        $controller->expulsion();
        break;
    default:
        $controller->index();
    }
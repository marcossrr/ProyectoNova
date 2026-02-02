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
    if (isset($_GET['tipo'])) {
    switch ($_GET['tipo']) {
        case 'vida':
            include 'views/views_vida/registro_v.php';
            break;
        case 'mineral':
            include 'views/views_min/registro_m.php';
            break;
        case 'artefacto':
            include 'views/views_min/registro_a.php';
            break;
        default:
            $controller->index();
    }
    }
}
<?php

class GestorEntidades {

    public function __construct(){
        if (!isset($_SESSION['entidades'])) {
            $_SESSION['entidades'] = [];
        }
    }

    public function obtenerTodos(){
        return $_SESSION['entidades'];
    }

    public function guardar($entidad){
        $_SESSION['entidades'][] = $entidad;
    }

    public function modificar($id, $nombre, $planeta, $estabilidad, $dieta = null, $dureza = null, $antiguedad = null){
    foreach ($_SESSION['entidades'] as $e){
        if ($e->getId() == $id){
            $e->setNombre($nombre);
            $e->setPlaneta($planeta);
            $e->setEstabilidad($estabilidad);

            if ($e->getTipo() == "vida") $e->setDieta($dieta);
            if ($e->getTipo() == "mineral") $e->setDureza($dureza);
            if ($e->getTipo() == "artefacto") $e->setAntiguedad($antiguedad);

            return true;
        }
    }
    return false;
}

    public function buscar($id) {
        foreach ($_SESSION['entidades'] as $e) {
            if ($e->getId() == $id) return $e;
        }
        return null;
}

public function expulsar($id) {
    foreach ($_SESSION['entidades'] as $i => $e) {
        if ($e->getId() == $id) {
            unset($_SESSION['entidades'][$i]); 
            $_SESSION['entidades'] = array_values($_SESSION['entidades']);
            return true;
        }
    }
    return false;
}

}

<?php

class GestorEntidades{
    public function __construct(){
        if (!isset($_SESSION['entidades'])) {
            $_SESSION['entidades'] = [];
        }
    }

    public function obtenerTodos(){
        return $_SESSION['entidades'];
    }

    public function guardar(){
        $_SESSION['entidades'][] = $e;
    }

    public function eliminar($id){
        foreach ($_SESSION['entidades'] = $i as $e){
            if ($e->getId() == $id) {
                unset($_SESSION['entidades'][$i]);
                $_SESSION['entidades'] = array_values($_SESSION['entidades']);
                return true;
        }
    }
    return false;
}

    public function modificar(){
        foreach ($_SESSION['entidades'] as $i => $e) {
            if ($e->getId() == $id) {
                $e->setNombre($nombre);
                $e->setPlaneta($planeta);
                $e->setEstabilidad($estabilidad_lvl);
                return true;
            }
        }
        return false;
    }        
}

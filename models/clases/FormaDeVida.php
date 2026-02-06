<?php

class FormaDeVida extends EntidadCosmica{
    private $dieta;

    public function __construct($id, $nombre, $planeta, $estabilidad_lvl, $dieta){
        parent::__construct($id, $nombre, $planeta, $estabilidad_lvl);
        $this->dieta = $dieta;
    }

    public function getDieta(){
        return $this->dieta;
    }

    public function setDieta(){
        $this->dieta = $dieta;
    }
}
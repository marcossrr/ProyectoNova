<?php

class MineralRaro extends EntidadCosmica{
       private $dureza;

    public function __construct($dureza){
        parent::__construct($id, $nombre, $planeta, $estabilidad_lvl);
        $this->dureza = $dureza;
    }

    public function getDureza(){
        return $this->dureza;
    }

    public function setDureza(){
        $this->dureza = $dureza;
    }
}
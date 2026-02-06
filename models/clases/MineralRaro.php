<?php

class MineralRaro extends EntidadCosmica{
       private $dureza;

    public function __construct($id, $nombre, $planeta, $estabilidad_lvl, $dureza){
        parent::__construct($id, $nombre, $planeta, $estabilidad_lvl);
        $this->dureza = $dureza;
    }

    public function getDureza(){
        return $this->dureza;
    }

    public function setDureza($dureza){
        $this->dureza = $dureza;
    }

        public function reaccionar() {
        return "Brilla con intensidad azulada";
    }

        public function getTipo() {
        return "mineral";
    }
}
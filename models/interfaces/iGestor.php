<?php

interface iGestor{
    public function obtenerTodos(): void;
    public function guardar(): void;
    public function eliminar(): void;
}
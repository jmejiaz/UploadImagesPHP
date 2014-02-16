<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ARchivo
 *
 * @author Mejia
 */
class Archivo {
    
 private $nombre ;
private $ruta;
private $categoria;

public function getNombre() {
return $this->nombre;
}

public function getRuta() {
return $this->ruta;
}

public function getCategoria() {
return $this->categoria;
}

public function setNombre($Nombre) {
$this->nombre = $Nombre;
}

public function setRuta($ruta) {
$this->ruta = $ruta;
}

public function setCategoria($categoria) {
$this->categoria = $categoria;
}
}



<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Mejia
 */
class Usuario {

    private $nombre;
    private $contrasena;

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

}

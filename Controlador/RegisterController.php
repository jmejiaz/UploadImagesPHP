<?php

include './Consultas.php';
include '../Modelo/Usuario.php';

$userName = $_POST["userName"];
$password = $_POST["password"];

if ($userName == null || $password == null) {
    echo 'All fields are mandatory.';
    die();
} else {


//setting a new user object
    $usuario = new Usuario();
    $usuario->setContrasena($password);
    $usuario->setNombre($userName);

//Insert into database the new user
    $consultas = consultas::instancia();
    echo ($consultas->createUser($usuario));
 
}





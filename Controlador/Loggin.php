<?php
include '../Modelo/Archivo.php';
include '../Modelo/Usuario.php';
include './Consultas.php';
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//class Loggin {
$usuario = new Usuario();
$_SESSION["existe"] = false;
$_SESSION["nombre"] =$_POST["usuario"];

$usuario->setNombre($_POST["usuario"]);
$usuario->setContrasena($_POST["contrasena"]);

$consultas = consultas::instancia();
echo $usuario->getNombre();

    $datosAcceso = $consultas->validarUsuario($usuario);
    if ($datosAcceso==true) {
         $_SESSION["existe"]=true;
         header("Location: http://localhost/PhpTelematica/Vista/SubirImagenesVista.php");
       
    }
    else {
        echo 'datos erroneos';
       $_SESSION["existe"] = false;
       
    }
       

    





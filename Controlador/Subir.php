<?php
include '../Modelo/Archivo.php';
include './Consultas.php';
echo 'Archivo subido correctamente';    
$archivo=$_FILES["archivo_fls"]["tmp_name"];
$destino = "../Biblioteca/".$_FILES["archivo_fls"]["name"];
move_uploaded_file($archivo,$destino);

$consultas = consultas::instancia();
$archivoObjeto = new Archivo();
$archivoObjeto->setCategoria($_POST["categoria"]);
$archivoObjeto->setNombre($_FILES["archivo_fls"]["name"]);
$archivoObjeto->setRuta("http://localhost/PhpTelematica/Biblioteca/".$_FILES["archivo_fls"]["name"]);
$consultas->insertarRuta($archivoObjeto);
        
echo 'Archivo subido correctamente';    
        
 ?>
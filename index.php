<?php
include './Controlador/Consultas.php';
include './Controlador/conexion.php';
include './Modelo/Archivo.php';
include './Vista/listarImagenes.php';

$consultas = consultas::instancia();
if(!isset($_POST["categoria"]))
{
    $_POST["categoria"]='*';
}
$arregloArchivos= array();
$arregloArchivos= $consultas->buscarImagenes($_POST["categoria"]);

?>


<form method="post" action="index.php">
<p>
<label for="categoria">categoria</label>
            <select name="categoria" id="categoria">
                <option value="Animales">Animales</option>
                <option value="Edificios">Edificios</option>
                <option value="Naturaleza">Naturaleza</option>
                <option value="Paisajes">Paisajes</option>
                <option value="Personas">Personas</option>
                <option value="Tecnologia">Tecnologia</option>
                <option value="Vehiculos">Vehiculos</option>
                <option value="Otros">Otros</option>
            </select>
<input type="submit" name="filtrar" id="filtrar" value="filtrar" />
</p>

<a href="http://localhost/PhpTelematica/Vista/index.php">Ingresa para poder subir imagenes</a>

<table width="300" height="258" border="0">
    
    <?php
    foreach ($arregloArchivos as $archivo) {
    
    $listarImagenes = new listarImagenes();
    $listarImagenes->mostarImagenes($archivo);
    
}
?>
</table>
</form>
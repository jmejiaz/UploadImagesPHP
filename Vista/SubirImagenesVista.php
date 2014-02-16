<?php
session_start();
if ($_SESSION["existe"] == true) {

    echo 'Bienvenido ' . $_SESSION["nombre"];
    ?>

    <form name = "enviar_archivo" method="post" action="../Controlador/Subir.php" enctype="multipart/form-data">
        <input type="file" name="archivo_fls" />
        <input type="submit" name="subir_btn" value="subir"/>
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
        </p>

    </form>


    <?php
        
}

else {
    echo 'Loggin necesario';
    
    exit();
}

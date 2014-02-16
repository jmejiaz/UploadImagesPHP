<?php
include './conexion.php';
class Consultas {

    private $db;
    private $conector;
    public static $consultas;

    private function __construct() {
        $this->db = conexion::instancia();
        $this->conector = $this->db->getConexion();
    }

    public function instancia() {
        if (!isset(self::$consultas)) {
            self::$consultas = new consultas();

            return self::$consultas;
        } else {
            return self::$consultas;
        }
    }

    public function consulta($consulta) {
        $resultado = mysql_query($consulta, $this->conector);
        return $resultado;
    }

    public function insertarRuta($archivo) {
        $nombre = $archivo->getNombre();
        $ruta = $archivo->getRuta();
        $categoria = $archivo->getCategoria();

        $resultado = $this->consulta("INSERT INTO  `imagenes_telematica`.`imagenes` (`Id` ,`Nombre` ,`Ruta` ,`Categoria`)
       VALUES (NULL ,  '$nombre',  '$ruta',  '$categoria')");
        die;
    }

    public function buscarImagenes($categoria) {

        $array = array();
        
        $resultado = $this->consulta("SELECT Nombre,Ruta FROM `imagenes` WHERE Categoria = '$categoria'");

        while ($fila = mysql_fetch_assoc($resultado)) {
            $archivo = new Archivo();
            $archivo->setNombre($fila['Nombre']);
            $archivo->setRuta($fila['Ruta']);
            array_push($array,$archivo);
            
        }
        return $array;
        
    }

    public function validarUsuario($Usuario) {

        $user = $Usuario->getNombre();
        $pass = $Usuario->getContrasena();
        $resultado = $this->consulta("select * from usuarios where User =" ."'$user'" . "&& Pass =" . "'$pass'");

        $informacion = mysql_fetch_array($resultado);
        if ($informacion > 0) { //igual
            return true;
        } else {
            return false;
            
        }
    }
    public function createUser($usuario){   
        try {
            
        
        $user = $usuario->getNombre();
        $pass = $usuario->getContrasena();
        $resultado = $this->consulta("select Id from usuarios where User =" ."'$user'");
        if(mysql_fetch_row($resultado)==FALSE){
        $resultado =$this->consulta("INSERT INTO `usuarios` (`Id`, `User`, `Pass`) VALUES (NULL, '$user', '$pass')");
        $message ='User created succesfully';
        
        }
        else
        {
            $message  = 'The user already exist';
          
        }
        return $message;
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }

    }

}

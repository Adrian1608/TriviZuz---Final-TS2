<?php

include_once '../util/conexion.php';

class ModelTienda(){

    public function __construct(){
        $conexion = new Conexion();
    }

    public function ModelRegistrarTienda($nombre,$direccion,$telefono){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare('INSERT INTO tienda VALUES(?,?,?,?)');
            $query -> bindParam(2,$nombre);
            $query -> bindParam(3,$direccion);
            $query -> bindParam(4,$telefono);
            $query -> execute();
        }catch(PDOException $e){
            $e -> getMessage();
        }
    }
}















?>
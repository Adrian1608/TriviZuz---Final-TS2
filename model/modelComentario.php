<?php

include_once '../util/conexion.php';

class ModelComentario{

    public function __construct(){
        $conexion = new Conexion();
    }

    public function ModelRegistrarComentario($contenido,$id_cliente,$id_producto){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare('INSERT INTO comentario VALUES(?,?,?)');
            $query -> bindParam(1,$contenido);
            $query -> bindParam(2,$id_cliente);
            $query -> bindParam(3,$id_producto);
            $query -> execute();
        }catch(PDOException $e){
            $e -> getMessage();
        }
    }
}

?>
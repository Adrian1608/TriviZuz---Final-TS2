<?php

include_once '../util/conexion.php';

class ModelCalificacion{

    public function __construct(){
        $conexion = new Conexion();
    }

    public function ModelRegistrarCalificacion($id_cliente,$id_producto, $valor){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare('INSERT INTO calificaion VALUES(?,?,?)');
 
            $query -> bindParam(1,$id_cliente);
            $query -> bindParam(2,$id_producto);
            $query -> bindParam(3,$valor);
            $query -> execute();
        }catch(PDOException $e){
            $e -> getMessage();
        }
    }
    public function ModeloRecuCalif($id){
        try {
            $obj = Conexion::singleton();
            $query = $obj->prepare('select * from calificacion where id_producto =?');
            $query -> bindParam(1, $id);
            $query->execute();
            $vector = $query->fetchAll();
            $query=null;
            return $vector;
        } catch (Exception $e) {
            throw $e;
        }
    }




}

?>
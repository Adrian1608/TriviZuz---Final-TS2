<?php 

include_once '../util/conexion.php';

class ModelProducto{

    public function __construct(){
        $conexion = new Conexion();
    }

    public function ModelRegistrarProducto($nom,$precio,$des,$rat,$tipo,$id_tienda,$img,$promocionado,$genero){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare('INSERT INTO producto VALUES(?,?,?,?,?,?,?,?,?,?)');
            $query -> bindParam(2,$nom);
            $query -> bindParam(3,$precio);
            $query -> bindParam(4,$des);
            $query -> bindParam(5,$rat);
            $query -> bindParam(6,$tipo);
            $query -> bindParam(7,$id_tienda);
            $query -> bindParam(8,$img);
            $query -> bindParam(9,$promocionado);
            $query -> bindParam(10,$genero);

            $query -> execute();

        }catch(PDOexception $e){
            $e->getMessage();
        }
    }
    
    public function ModelListarProducto(){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare('SELECT * FROM producto');
            $query -> execute();
            $vector = $query->fetchAll();
            $query = null;
            return $vector;
        }catch(PDOException $e){
            throw $e;
        }
    }
}

?>
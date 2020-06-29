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
            $query = $objeto -> prepare('SELECT * FROM producto LIMIT');
            $query -> execute();
            $vector = $query->fetchAll();
            $query = null;
            return $vector;
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ModelContarProductos(){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare('SELECT * FROM producto');
            $query -> execute();
            $total_productos = $query -> rowCount();
            $total_productos = ceil($total_productos);
            return $total_productos;
        }catch(PDOExpcetion $e){
            throw $e;
        }
    }

    public function ModelListarProductoConLimites($inicio,$productos){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare('SELECT * FROM producto LIMIT :inicir,:products');
            $query -> bindParam(':inicir',$iniciar,PDO::PARAM_INT);
            $query -> bindParam(':products',$productos,PDO::PARAM_INT);
            $query -> execute();
            $vector = $query->fetchAll();
            $query = null;
            return $vector;
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function DatosProductoModelo($id){
        try {
            $obj = Conexion::singleton();
            $query = $obj->prepare('select * from producto where id_producto =?');
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
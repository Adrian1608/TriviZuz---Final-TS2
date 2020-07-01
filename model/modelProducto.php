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
            $query = $objeto -> prepare('SELECT * FROM producto WHERE tipo_producto=0');
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
            $query = $objeto -> prepare('SELECT * FROM producto WHERE tipo_producto=0');
            $query -> execute();
            $total_productos = $query -> rowCount();
            $total_productos = ceil($total_productos);
            return $total_productos;
        }catch(PDOExpcetion $e){
            throw $e;
        }
    }

    public function ModelContarEquipoProductos(){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare('SELECT * FROM producto WHERE tipo_producto=1');
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
            $query = $objeto -> prepare('SELECT * FROM producto WHERE tipo_producto=0 LIMIT :inicir,:products');
            $query -> bindParam(':inicir',$inicio,PDO::PARAM_INT);
            $query -> bindParam(':products',$productos,PDO::PARAM_INT);
            $query -> execute();
            $vector = $query->fetchAll();
            $query = null;
            return $vector;
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ModelListarProductoEquipoConLimites($inicio,$productos){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare('SELECT * FROM producto WHERE tipo_producto=1  LIMIT :inicir,:products');
            $query -> bindParam(':inicir',$inicio,PDO::PARAM_INT);
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
    public function DatosProductoComentarioModelo($id){
        try {
            $obj = Conexion::singleton();
            $query = $obj->prepare('select * from comentario where id_producto=?');
            $query -> bindParam(1, $id);
            $query->execute();
            $vector = $query->fetchAll();
            $query=null;
            return $vector;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function ModelBuscarProducto($busqueda){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare("SELECT * FROM producto WHERE tipo_producto = 0 AND (nombre_producto LIKE '%$busqueda%' OR descripcion_producto LIKE '%$busqueda%')");
            $query -> execute();
            $vector = $query->fetchAll();
            $query = null;
            return $vector;
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ModelBuscarProductoEquipo($busqueda){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare("SELECT * FROM producto WHERE (nombre_producto LIKE '%$busqueda%' OR descripcion_producto LIKE '%$busqueda%')");
            $query -> execute();
            $vector = $query->fetchAll();
            $query = null;
            return $vector;
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ModelListarProductoPorPrecio($inicio,$productos){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare('SELECT * FROM producto WHERE tipo_producto = 0 ORDER BY precio_producto DESC LIMIT :inicir,:products');
            $query -> bindParam(':inicir',$inicio,PDO::PARAM_INT);
            $query -> bindParam(':products',$productos,PDO::PARAM_INT);
            $query -> execute();
            $vector = $query->fetchAll();
            $query = null;
            return $vector;
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ModelListarProductoEquipoPorPrecio($inicio,$productos){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare('SELECT * FROM producto WHERE tipo_producto = 1 ORDER BY precio_producto DESC LIMIT :inicir,:products');
            $query -> bindParam(':inicir',$inicio,PDO::PARAM_INT);
            $query -> bindParam(':products',$productos,PDO::PARAM_INT);
            $query -> execute();
            $vector = $query->fetchAll();
            $query = null;
            return $vector;
        }catch(PDOException $e){
            throw $e;
        }
    }


    public function ModelListarProductoPorRating($inicio,$productos){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare('SELECT * FROM producto WHERE tipo_producto = 0 ORDER BY rating_producto DESC LIMIT :inicir,:products');
            $query -> bindParam(':inicir',$inicio,PDO::PARAM_INT);
            $query -> bindParam(':products',$productos,PDO::PARAM_INT);
            $query -> execute();
            $vector = $query->fetchAll();
            $query = null;
            return $vector;
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ModelListarProductoEquipoPorRating($inicio,$productos){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare('SELECT * FROM producto WHERE tipo_producto = 1 ORDER BY rating_producto DESC LIMIT :inicir,:products');
            $query -> bindParam(':inicir',$inicio,PDO::PARAM_INT);
            $query -> bindParam(':products',$productos,PDO::PARAM_INT);
            $query -> execute();
            $vector = $query->fetchAll();
            $query = null;
            return $vector;
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ModelListarProductoPorTienda($inicio,$productos){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare('SELECT * FROM producto WHERE tipo_producto = 0 ORDER BY id_tienda DESC LIMIT :inicir,:products');
            $query -> bindParam(':inicir',$inicio,PDO::PARAM_INT);
            $query -> bindParam(':products',$productos,PDO::PARAM_INT);
            $query -> execute();
            $vector = $query->fetchAll();
            $query = null;
            return $vector;
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ModelListarProductoEquipoPorTienda($inicio,$productos){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare('SELECT * FROM producto WHERE tipo_producto = 1 ORDER BY id_tienda DESC LIMIT :inicir,:products');
            $query -> bindParam(':inicir',$inicio,PDO::PARAM_INT);
            $query -> bindParam(':products',$productos,PDO::PARAM_INT);
            $query -> execute();
            $vector = $query->fetchAll();
            $query = null;
            return $vector;
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ModelListarProductoPorGenero($inicio,$productos,$genero){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare('SELECT * FROM producto WHERE tipo_producto=0 AND genero_producto=:genro LIMIT :inicir,:products');
            $query -> bindParam(':genro',$genero);
            $query -> bindParam(':inicir',$inicio,PDO::PARAM_INT);
            $query -> bindParam(':products',$productos,PDO::PARAM_INT);
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
<?php 

include_once '../util/conexion.php';

class ModelPedido{

    public function __construct(){
        $conexion = new Conexion();
    }
    public function ModelContarProductoPedido($id_producto){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare('SELECT * FROM detalle_pedido where id_producto=?');
            $query -> bindParam(1, $id_producto);
            $query->execute();
            $vector = $query->fetchAll();
            $query=null;
            $total_productos = 0;
            foreach ($vector as $vec){
                $total_productos = $total_productos + $vec[1];
            }
            return $total_productos;
        }catch(PharException $e){
            throw $e;
        }
    }
}

?>
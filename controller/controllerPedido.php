<?php
    include_once '../model/modelPedido.php';

    class ControllerPedido{

        public function ControllerContarProducto($id_producto){
            try{
                $objeto = new ModelPedido();
                return $objeto -> ModelContarProductoPedido($id_producto);
            }catch(PDOException $e){
                throw $e;
            }
        } 
    }



?>
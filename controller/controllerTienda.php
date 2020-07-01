<?php
    include_once '../model/modelTienda.php';

    class ControllerTienda{

        public function ControllerRegistrarTienda($nombre,$direccion,$telefono){
            try{
                $objeto = new ModelTienda();
                $objeto -> ModelRegistrarTienda($nombre,$direccion,$telefono);
                header("Location:../view/registrar.php?valor=1");
            }catch(PDOException $e){
                throw $e;
            }
        }
        public function ControllerBuscarTienda($id_tienda){
            try{
                $objeto = new ModelTienda();
                return $objeto -> ModelBuscarTienda($id_tienda);
            }catch(PDOException $e){
                throw $e;
            }
        }

        
    }



?>
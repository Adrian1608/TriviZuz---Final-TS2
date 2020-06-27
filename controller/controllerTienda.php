<?php
    include_once '../model/modelTienda.php';

    class ControllerTienda(){

        public function ControllerRegistrarTienda($nombre,$direccion,$telefono){
            try{
                $objeto = new ModelTienda();
                $objeto -> ModelRegistrarTienda($nombre,$direccion,$telefono);
                header("Location:../view/registrar.php?valor=1");
            }catch(PDOException $e){
                throw $e;
            }
        }

        
    }



?>
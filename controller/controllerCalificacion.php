<?php
    include_once '../model/modelClasificacion.php';

    class ControllerCalificacion{

        public function ControllerRegistrarCalificacion($id_cliente,$id_producto, $valor){
            try{
                $objeto = new ModelCalificacion();
                $objeto -> ModelRegistrarCalificacion($id_cliente,$id_producto, $valor);
            }catch(PDOException $e){
                throw $e;
            }
        }

        
    }
?>
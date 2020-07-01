<?php
    include_once '../model/modelComentario.php';

    class ControllerComentarios{

        public function ControllerRegistrarComentario($contenido,$id_cliente,$id_producto){
            try{
                $objeto = new ModelComentario();
                $objeto -> ModelRegistrarComentario($contenido,$id_cliente,$id_producto);
            }catch(PDOException $e){
                throw $e;
            }
        }

        
    }



?>
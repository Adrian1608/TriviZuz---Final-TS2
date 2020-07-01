<?php
include_once '../model/modelProducto.php';

class ControllerProducto{
    
    public function ControllerRegistrarProducto($nom,$precio,$des,$rat,$tipo,$id_tienda,$img,$promocionado,$genero){
        try{
            $objeto = new ModelProducto();
            $objeto -> ModelRegistrarProducto($nom,$precio,$des,$rat,$tipo,$id_tienda,$img,$promocionado,$genero);
            header("Location:../view/registrar.php?valor=1");
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ControllerListarProducto(){
        try{
            $objeto = new ModelProducto();
            return $objeto -> ModelListarProducto();
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ControllerContarProductos(){
        try{
            $objeto = new ModelProducto();
            return $objeto -> ModelContarProductos();
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ControllerListarProductoConLimites($inicio,$productos){
        try{
            $objeto = new ModelProducto();
            return $objeto -> ModelListarProductoConLimites($inicio,$productos);
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ControllerDatosProducto($id){
        try {
            $obj=new modelProducto();
            return $obj->DatosProductoModelo($id);
        } catch (PDOException $e) {
            throw $e;
        }
    }
    public function ControllerComentarioProducto($id){
        try {
            $obj=new modelProducto();
            return $obj->DatosProductoComentarioModelo($id);
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function ControllerBuscarProducto($busqueda){
        try{
            $objeto = new ModelProducto();
            return $objeto -> ModelBuscarProducto($busqueda);
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ControllerListarProductoPorPrecio(){
        try{
            $objeto = new ModelProducto();
            return $objeto -> ModelListarProductoPorPrecio();
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ControllerListarProductoPorGenero(){
        try{
            $objeto = new ModelProducto();
            return $objeto -> ModelListarProductoPorGenero();
        }catch(PDOException $e){
            throw $e;
        }
    }

}


?>
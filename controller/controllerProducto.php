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

    public function ControllerContarEquipoProductos(){
        try{
            $objeto = new ModelProducto();
            return $objeto -> ModelContarEquipoProductos();
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

    public function ControllerListarProductoEquipoConLimites($inicio,$productos){
        try{
            $objeto = new ModelProducto();
            return $objeto -> ModelListarProductoEquipoConLimites($inicio,$productos);
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

    public function ControllerBuscarProductoEquipo($busqueda){
        try{
            $objeto = new ModelProducto();
            return $objeto -> ModelBuscarProductoEquipo($busqueda);
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ControllerListarProductoPorPrecio($inicio,$productos){
        try{
            $objeto = new ModelProducto();
            return $objeto -> ModelListarProductoPorPrecio($inicio,$productos);
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ControllerListarProductoEquipoPorPrecio($inicio,$productos){
        try{
            $objeto = new ModelProducto();
            return $objeto -> ModelListarProductoEquipoPorPrecio($inicio,$productos);
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ControllerListarProductoPorRating($inicio,$productos){
        try{
            $objeto = new ModelProducto();
            return $objeto -> ModelListarProductoPorRating($inicio,$productos);
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ControllerListarProductoEquipoPorRating($inicio,$productos){
        try{
            $objeto = new ModelProducto();
            return $objeto -> ModelListarProductoEquipoPorRating($inicio,$productos);
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ControllerListarProductoPorTienda($inicio,$productos){
        try{
            $objeto = new ModelProducto();
            return $objeto -> ModelListarProductoPorTienda($inicio,$productos);
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ControllerListarProductoEquipoPorTienda($inicio,$productos){
        try{
            $objeto = new ModelProducto();
            return $objeto -> ModelListarProductoEquipoPorTienda($inicio,$productos);
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ControllerListarProductoPorGenero($inicio,$productos,$genero){
        try{
            $objeto = new ModelProducto();
            return $objeto -> ModelListarProductoPorGenero($inicio,$productos,$genero);
        }catch(PDOException $e){
            throw $e;
        }
    }

}


?>
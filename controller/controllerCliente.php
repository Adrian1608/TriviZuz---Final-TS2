<?php

include_once '../model/modelCliente.php';

class ControllerCliente(){

    public function ControllerRegistrarCliente($nombre,$apellido,$telefono,$contra,$user){
        try{
            $objeto = new ModelCliente();
            $objeto -> ModelRegistrarCliente($nombre,$apellido,$telefono,$contra,$user);
            header("Location:../view/registrar.php?valor=1");
        }catch(PDOException $e){
            throw $e;
        }
    }

    public function ControllerValidarCliente($contraseña,$user){
        try{
            $objeto = new ModelCliente();
            return $objeto -> ModelValidarCliente($contraseña,$user);
        }catch(PDOException $e){
            throw $e;
        }
    }
}







?>
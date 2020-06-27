<?php

include_once '../util/conexion.php';

class ModelCliente{
    
    public function __construct(){
        $conexion = new Conexion();
    }

    public function ModelRegistrarCliente($nombre,$apellido,$telefono,$contraseña,$user){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare('INSERT INTO cliente VALUES(?,?,?,?,?,?)');
            $query -> bindParam(2,$nombre);
            $query -> bindParam(3,$apellido);
            $query -> bindParam(4,$telefono);
            $query -> bindParam(5,$contraseña);
            $query -> bindParam(6,$user);
            $query -> execute();
        }catch(PDOException $e){
            $e -> getMessage();
        }
    }

    public function ModelValidarCliente($contraseña,$user){
        try{
            $objeto = Conexion::singleton();
            $query = $objeto -> prepare('SELECT * FROM cliente WHERE contraseña_cliente=? AND nombre_usuario=?');
            $query -> bindParam(1,$contraseña);
            $query -> bindParam(2,$user);
            $query -> execute();
            $vector = $query -> fetchAll();
            $query = null;
            return $vector;
        }catch(PDOException $e){
            throw $e;
        }
    }
}

?>
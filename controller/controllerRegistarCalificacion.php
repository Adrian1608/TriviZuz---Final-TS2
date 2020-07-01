<?php
include_once 'controllerCalificacion.php';

      $id_producto=$_POST["id_producto"];
      $id=$_POST["id_cliente"];
      $valor=$_POST["estrellas"];

      $objeto = new ControllerCalificacion();
      $objeto->ControllerRegistrarCalificacion($id_cliente,$id_producto, $valor);

  header ("Location:../view/producto.php?id=".$id_producto);  
?>
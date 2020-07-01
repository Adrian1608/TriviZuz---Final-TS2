<?php
include_once 'controllerComentarios.php';
      $contenido=$_POST["comentario"];
      $id_producto=$_POST["id_producto"];
      $id=$_POST["id_cliente"];

      $objeto = new ControllerComentarios();
      $objeto->ControllerRegistrarComentario($contenido,$id_cliente,$id_producto);

  header ("Location:../view/producto.php?id=".$id_producto);  
?>
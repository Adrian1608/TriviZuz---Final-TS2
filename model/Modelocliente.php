<?php
include_once '../Conexión/conexion.php';
class Modelocliente
{
	public function __construct()
	{
		$con = new Conexion();
	}

  public function ModelInsertarCliente($usu,$nom,$ap,$tel,$cla){
  try{   
       $obj = Conexion::singleton();
       $query = $obj->prepare('INSERT INTO cliente(usuario_cliente,nombre_cliente,apellido_cliente,telefono_cliente,contraseña_cliente) VALUES(?,?,?,?,?)');
       $query->bindParam(1, $usu);
       $query->bindParam(2, $nom);
       $query->bindParam(3, $ap);
       $query->bindParam(4, $tel);
       $query->bindParam(5, $cla);

       $query->execute();//Ejecuta la consulta SQL
    }catch(PDOException $e){
          $e->getMessage();
    }
  }
  public function ModelValidarcliente($usu,$cla){
  try{   
       $obj = Conexion::singleton();
       $query = $obj->prepare('SELECT * FROM cliente WHERE usuario_cliente=? AND contraseña_cliente=?');

       $query->bindParam(1, $usu);
       $query->bindParam(2, $cla);

       $query->execute();//Ejecuta la consulta SQL
       $vector = $query->fetchAll();
       $query=null;
       return $vector;
    }catch(Exception $e){
        throw $e;
    }
  }
}
?>
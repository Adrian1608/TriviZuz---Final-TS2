<?php
/*Modelo CAPA - ACCESO A DATOS
SELECT,INSERT,UPDATE y DELETE
**/
include_once '../util/conexion.php';
class Modelpagprin
{
	public function __construct()
	{
		$con = new Conexion();
	}
	public function ModelListarProdPagprin(){
	try{   
       $obj = Conexion::singleton();
       $query = $obj->prepare('SELECT * FROM producto WHERE promocionado = 1 LIMIT 8');
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
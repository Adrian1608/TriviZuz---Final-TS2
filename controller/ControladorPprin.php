<?php
include_once '../model/modelo_pag_prin.php';
class Controllerpagprin
{
	public function ControllerListarPprin(){
		try{   
        	$obj=new Modelpagprin();
        	return $obj->ModelListarProdPagprin();
     }catch(Exception $e){
         throw $e;
     }	
	}	
}
?>
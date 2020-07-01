<?php
session_start();
include 'controllerCliente.php';
$pro = new ControllerCliente();
IF($_POST["usuario"] == "" || $_POST["contraseñausuario"]=="" ){
    header('Location:../view/Pagina_principal.php?err=1');
} else {

$_SESSION['user'] = $_POST["usuario"];
$_SESSION['contraseña'] = $_POST["contraseñausuario"];

$data=$pro->ControllerValidarcliente($_POST["usuario"], $_POST["contraseñausuario"]);
foreach($data as $fila){
	$_SESSION['user'] = $fila["usuario_cliente"];
	$_SESSION['contraseña'] = $fila["contraseña_cliente"];
}   
//Validando
if(count($data) == 0)
    header('Location:../view/Pagina_principal.php?err=2');
else {
    header('Location:../view/Pagina_principal.php');
}
}
?>
<?php
include_once 'controllerCliente.php';

//Recibiendo los valores
//Recibiendo valores del formulario
//Validar que se pulso el botón grabar

	$obj = new ControllerCliente();

	$nombre	=	$_POST["nombre"];
	$apellido	=	$_POST["apellido"];
	$telefono	=	$_POST["telefono"];
	$contra	=	$_POST["usuario"];
	$user	=	$_POST["contraseña"];

	$obj->ControllerRegistrarCliente($nombre,$apellido,$telefono,$contra,$user);

	header("location:../view/registrar.php?ins=1");
?>
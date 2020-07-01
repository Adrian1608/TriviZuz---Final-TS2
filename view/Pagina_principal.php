<!DOCTYPE html>
<?php 
	include_once"../controller/ControladorPprin.php";
    session_start();
?>
<html>
<head>
	<title>Trivizuz</title>
	<link rel="stylesheet" type="text/css" href="..\css\Estilo_p_principal.css">
</head>
<body>
	<header>
		<a href="Pagina_principal.php"><img src="..\img\3vzuz_logo_wb.png" width="100px" height="50px" class="logo"></a>
		<h1>Trivizuz</h1>
		<ul>
        
        	<a href="nosotros.php"><li class="li1">Sobre nosotros</li></a>
        	<a href="busqueda.php"><li class="li2">Videojuegos</li></a>
        	<a href="busqueda_equipo.php"><li class="li3">Equipos</li></a>
        	
 
        </ul>
        <form action="busqueda.php" method="">
            <input type="text" name="busqueda">
            <input type="submit" name="Buscar" value="Buscar">
        </form>
        <?php if(isset($_SESSION["user"])&& isset($_SESSION["contraseña"])) { ?>
        <?php IF($_SESSION["user"] == "" && $_SESSION["contraseña"]=="" ){ ?>
        <form action="../controller/ControladorValidarAcceso.php" method="post">
        	<input type="text" name="usuario">
        	<input type="password" name="contraseñausuario">
        	<input type="submit" name="Ingresar" value="Ingresar">
        </form>
        <form action="registrar.php" method="post">
        	<input type="button" name="Registro" value="Registrarse">
        </form>
        <?php }else{ ?>
        <li class="usu"><?php echo "<label>Usuario:".$_SESSION["user"]."</label>";?></li>
        <li class="salir"><a href="../controller/ControllerDestruirSesion.php">Cerrar Sesión</a></li>
        <?php } ?>
        <?php }else{ ?>
            <form action="../controller/ControladorValidarAcceso.php" method="post">
            <input type="text" name="usuario">
            <input type="password" name="contraseñausuario">
            <input type="submit" name="Ingresar" value="Ingresar">
        </form>
        <form action="#" method="">
            <input type="button" name="Registro" value="Registrarse">
        </form>
        <?php } ?>
	</header>
    
	 <?php
            $objprod= new Controllerpagprin();
            $listar = $objprod->ControllerListarPprin();
            $i=0;

            foreach ($listar as $prod) {
                $Id=$prod[0];
                $Nombre=$prod[1];
                $imagen=$prod[7];
                if ($prod[8]=1) {
                   $i=$i+1;
                }
                
        ?>
            <a href="producto.php?id=<?php echo("".$Id."") ?>"><img src="..\img\<?php echo("".$imagen."")?>" width="350px" height="350px" class="Algo<?php echo("".$i."") ?>"></a>
			<figcaption class="Algotex<?php echo("".$i."") ?>"> <?php echo ("".$Nombre."")?> </figcaption>

        <?php                   
            }
        ?>


</body>
</html>


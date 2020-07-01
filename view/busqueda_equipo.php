<html>
<meta charset="UTF-8">

<?php   include_once '../controller/controllerProducto.php';?>

<link rel="stylesheet" type="text/css" href="../css/estilos_busqueda.css">
<head>
<?php
    $productos_x_pagina = 20;

?>
    <title>Buscando en 3VZUZ</title>

    <?php

    $iniciar = ($_GET['pagina']-1)*$productos_x_pagina;

    $listar = new ControllerProducto();
    $lista = $listar -> ControllerListarProductoEquipoConLimites($iniciar,$productos_x_pagina);
    ?>

    <link rel="icon" href="../img/3vzuz icono.ico">
</head>

<header id="superior">
    <img class="logo" src="../img/3vzuz_logo.png">
    <div class="elcabecera">
    <div class="cabecera"><a href="nosotros.php">Sobre nosotros</a></div>
    <div class="cabecera"><a href="busqueda.php">Videojuegos</a></div>
    <div class="cabecera"><a href="busqueda_equipo.php">Equipos</a></div>
    </div> 
    <nav>
        <form method="get" action="busqueda_producto.php">
            <input class="busqueda" type="text" placeholder="Buscar..." name="la_busqueda">
            <input type="submit" value="Buscar">
        </form>
    </nav>
    <form method="post" action="busqueda.php">
    <div>
            <input type="text" placeholder="Usuario" name="usuario"><br>
            <input type="password" placeholder="Contraseña" name="contraseña">
    </div>
    <div>
        <button type="submit" value="ingreso">Ingresar</button>
        </form>
        <form method="post" action="registrar.php">
        <button type="submit" value="registrar">Registrarse</button>
        </form>
    </div>
</header>
<header id="inferior">
<form method="post" action="categorizacion_producto_equipo.php?pagina=<?php echo $_GET["pagina"];?>">
    <div><select name = "orden">
        <option value="ninguno">Ordenar por:</option>
        <option value="precio">Precio</option>
        <option value="rating">Rating</option>
        <option value="tienda">Tienda</option>
    </select></div>
    <div>
    <input type="submit" value="Mostrar">
    </div>
</form>
</header>
<body>

    <?php ##Cada página tendrá 30 items para mostrar máximo jsjs 

        $productos = new ControllerProducto();
        $cantidad_productos = $productos -> ControllerContarEquipoProductos();

        $paginas = $cantidad_productos / $productos_x_pagina;
        $paginas = ceil($paginas);
           
        if(!$_GET){
            header('Location:busqueda_equipo.php?pagina=1');
        }

        if($_GET['pagina'] > $paginas || $_GET['pagina'] <= 0){
            header('Location:busqueda_equipo.php?pagina=1');
        }
    ?>

    <?php

        foreach($lista as $fila){
            echo '<div class="producto"><a href="producto.php?id='.$fila[0].'">
            <img src="../img/'.$fila[0].'.jpg" width="225px" height="225px"/></a></div>';
        }
    
    ?>

</body>

<footer></footer>

<table class="paginacion">
    <td><a href="busqueda_equipo.php?pagina=<?php echo $_GET['pagina']-1?>"><<</a></td>

<?php  for($i=0;$i<$paginas;$i++): ?>
    
    <td><a href="busqueda_equipo.php?pagina=<?php echo $i+1; ?>">

    <?php echo $i+1; ?>

    </a></td>

<?php endfor ?>
    <td><a href="busqueda_equipo.php?pagina=<?php echo $_GET['pagina']+1?>">>></a></td>
</table>

</html>
<html>
<meta charset="UTF-8">

<?php   include_once '../controller/controllerProducto.php';?>

<link rel="stylesheet" type="text/css" href="../css/estilos_busqueda.css">
<head>
<?php
    $productos_x_pagina = 20;
?>
    <title>Buscando en 3VZUZ</title>

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
        <?php
            $la_busqueda = strtolower($_REQUEST["la_busqueda"]);

            if(empty($la_busqueda)){
                header('Location:busqueda.php');
            }

        ?>
        <form method="get" action="busqueda_producto.php">
            <input class="busqueda" type="text" placeholder="Buscar..." name="la_busqueda" value="<?php echo $la_busqueda;?>">
            <input type="submit" value="Buscar">
        </form>
    </nav>
    <form method="post" action="busqueda.php">
    <div>
            <input type="text" placeholder="Usuario" name="usuario"><br>
            <input type="password" placeholder="Contraseña" name="contraseña">
    </div>
    <div>
        <input type="submit" value="Ingresar">
        </form>
        <form method="post" action="registrar.php">
        <input type="submit" value="Registrarse">
        </form>
    </div>
</header>
<header id="inferior">
<form method="post" action="categorizacion_producto.php?pagina=<?php echo $_GET["pagina"];?>">
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
<form method="post" action="categorizacion_producto.php?pagina=<?php echo $_GET["pagina"];?>">
    <div><select name="genero">
        <option value="ninguno">Categorías:</option>
        <option value="accion">Accion</option>
        <option value="aventura">Aventura</option>
        <option value="estrategia">Estrategia</option>
        <option value="rpg">RPG</option>
        <option value="casual">Casual</option>
    </select></div>
    <div>
        <input type="submit" value="Mostrar">
    </div>
    </form>
</header>
<body>

    <?php ##Cada página tendrá 20 items para mostrar máximo jsjs 

        $productos = new ControllerProducto();
        $cantidad_productos = $productos -> ControllerContarProductos();

        $paginas = $cantidad_productos / $productos_x_pagina;
        $paginas = ceil($paginas);

        $listar = new ControllerProducto();

        if(isset($_GET["tipo_producto"])){
            $listas = $listar -> ControllerBuscarProductoEquipo($la_busqueda);
        }else{
            $listas = $listar -> ControllerBuscarProducto($la_busqueda);
        }

    ?>

    <?php

        foreach($listas as $fila){
            echo '<div class="producto"><a href="producto.php?id='.$fila[0].'">
            <img src="../img/'.$fila[0].'.jpg" width="225px" height="225px"/></a></div>';
        }
    
    ?>

</body>

<footer></footer>

<table class="paginacion">
    <td><a href="busqueda.php?pagina=<?php echo $_GET['pagina']-1?>"><<</a></td>

<?php  for($i=0;$i<$paginas;$i++): ?>
    
    <td><a href="busqueda.php?pagina=<?php echo $i+1; ?>">

    <?php echo $i+1; ?>

    </a></td>

<?php endfor ?>
    <td><a href="busqueda.php?pagina=<?php echo $_GET['pagina']+1?>">>></a></td>
</table>

</html>
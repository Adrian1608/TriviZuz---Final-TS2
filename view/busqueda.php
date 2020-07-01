<html>
<meta charset="UTF-8">

<?php   include_once '../controller/controllerProducto.php';?>

<link rel="stylesheet" type="text/css" href="../css/estilos_busqueda.css">
<head>
<?php
    if(isset($_POST["busqueda"])){
        $busqueda = ': ' . $_POST["busqueda"];
    }else{
        $busqueda = '';
    }
        ## Busqueda superior es la busqueda en todo mientras busqueda limitada es solo en esa categoria
        ## Solo se puede dar 1 a la vez logicamente, y eso dice la codicional

    $productos_x_pagina = 20;

?>
    <title>Buscando en Trivizuz<?php echo $busqueda;?> </title>

    <?php

    $iniciar = ($_GET['pagina']-1)*$productos_x_pagina;

    $listar = new ControllerProducto();
    $lista = $listar -> ControllerListarProductoConLimites($iniciar,$productos_x_pagina);
    $listas = $listar -> ControllerListarProducto();
    ?>

    <link rel="icon" href="../img/3vzuz icono.ico">
</head>

<header id="superior">
    <img class="logo" src="../img/3vzuz_logo.png">
    <div class="elcabecera">
    <div class="cabecera"><a href="nosotros.php">Sobre nosotros</a></div>
    <div class="cabecera"><a href="busqueda.php">Videojuegos</a></div>
    <div class="cabecera"><a href="busqueda.php">Equipos</a></div>
    </div> 
    <nav>
        <form method="post" action="busqueda.php">
            <input class="busqueda" type="text" placeholder="Buscar..." name="busqueda">
            <button type="submit" value="Buscar">Buscar</button>
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
    <form>
    <div><select>
        <option name="ninguno">Ordenar por:</option>
        <option name="precio">Precio</option>
        <option name="lanzamiento">Fecha de lanzamiento</option>
        <option name="llegada">Rating</option>
        <option name="estrategia">Tienda</option>
    </select></div>
    <div><select>
        <option name="ninguno">Categorías:</option>
        <option name="accion">Accion</option>
        <option name="aventura">Aventura</option>
        <option name="estrategia">Estrategia</option>
        <option name="estrategia">RPG</option>
        <option name="estrategia">Casuales</option>

    </select></div>
    <div>
        <button type="submit" value="Mostrar">Mostrar</button>
    </div>
    </form>
    <nav>
        <form method="post" action="busqueda.php">
            <input type="text" placeholder="Buscar...">
            <button type="submit" value="Buscar">Buscar</button>
        </form>
    </nav>
</header>
<body>

    <?php ##Cada página tendrá 30 items para mostrar máximo jsjs 

        $productos = new ControllerProducto();
        $cantidad_productos = $productos -> ControllerContarProductos();

        $paginas = $cantidad_productos / $productos_x_pagina;
        $paginas = ceil($paginas);
           
        if(!$_GET){
            header('Location:busqueda.php?pagina=1');
        }

        if($_GET['pagina'] > $paginas || $_GET['pagina'] <= 0){
            header('Location:busqueda.php?pagina=1');
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
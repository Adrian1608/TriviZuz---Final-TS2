<?php
    include_once"../controller/controllerProducto.php";
    include_once"../controller/controllerCliente.php";
    include_once"../controller/controllerTienda.php";
    include_once"../controller/controllerPedido.php";
    include_once"../controller/controllerCalificacion.php";
    $objproducto = new ControllerProducto();
    $listar = $objproducto->ControllerDatosProducto($_GET["id"]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivizus: <?php echo $listar[0][1]?></title>
    <link rel="icon" href="../img/3vzuz_logo.png">
    <link rel="stylesheet" type="text/css" href="../css/estilos_productos.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet"> 
</head>
<body>
    
<header id="superior">
    <img class="logo" src="../img/3vzuz_logo_wb.png">
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
<section id="cont1">
    <aside id="izq">
        <article id="pro_ima">
            
            <p id="titulo_ima_pro">Producto: <?php echo $listar[0][1]?></p>
            <a href="producto.php?id=<?php echo $listar[0][0]?>"><img id="img1" src="../img/<?php echo $listar[0][0]?>.jpg" width="500" height="500"></a>
        </article>
        <article id="comentario">
            <form action="../controller/controllerRegistrarComentario.php" method="post">
                <p id="deje_comen">Deje un comentario:</p>
                <input type="hidden" name="id_producto" value="<?php echo $_GET["id"]?>">
                <p id="comen"><textarea name="comentario" cols="50" rows="1"></textarea></p>
                <input id="enviar" type="submit" name="submit" value="Enviar">
            </form>
        </article>
    </aside>
    <article id="cont">
        <article id="top_pro">
            <article id="calificacion">
                <?php
                    $objcalf = new ControllerCalificacion();
                    $listacalf = $objcalf->ControllerListarCalificacion($_GET["id"]);
                    $count1 = 0;
                    $sum = 0;
                    $prom = 0;
                    foreach($listacalf as $list){
                        $sum = $sum + $list[2]; 
                        $count1 = $count1 + 1;
                    }
                    if ($count1!=0) {
                        $prom = $sum/$count1;
                    }
                    

                ?>
                <form action="../controller/controllerRegistarCalificacion.php" method="post">
                    <p id="titu_clas">Clasificación:</p>
                    <input type="hidden" name="id_producto" value="<?php echo $_GET["id"]?>">
                    <p class="clasi">
                            <input id="radio1" type="radio" name="estrellas" value="5" <?php if ($prom==5) {echo "checked";} ?>>
                            <label class="titu" id="pop" for="radio1">★</label>
                            <input id="radio2" type="radio" name="estrellas" value="4" <?php if ($prom==4) {echo "checked";} ?>>
                            <label class="titu" for="radio2">★</label>
                            <input id="radio3" type="radio" name="estrellas" value="3" <?php if ($prom==3) {echo "checked";} ?>>
                            <label class="titu" for="radio3">★</label>
                            <input id="radio4" type="radio" name="estrellas" value="2" <?php if ($prom==2) {echo "checked";} ?>>
                            <label class="titu" for="radio4">★</label>
                            <input id="radio5" type="radio" name="estrellas" value="1" <?php if ($prom==1) {echo "checked";} ?>>
                            <label class="titu"  for="radio5">★</label>
                    </p>
                    <input id="filtrar" type="submit" value="Enviar">
                </form>
            </article>
            <article id="precio">
                <form action="web_tienda.php?id=<?php echo $_GET["id"]?>" method="post" target="_blank">
                    <p id="titu_pre">Precio:</p>
                    <p id="precio">
                        <?php
                            $obj2 = new ControllerProducto();
                            $pro2 = $obj2 -> ControllerDatosProducto($_GET["id"]);
                            echo "S/. ".$pro2[0][2];                        
                            ?>
                    </p>
                    <input id="comprar" type="submit" value="Comprar">
                </form>
            </article>
            <article id="com_users">
                <p id="titu_comen_use">Comentarios de usuarios:</p>
                    <?php 
                    $objcomentarios = new ControllerProducto();
                    $objuser = new ControllerCliente();
                    try {
                        $comen = $objcomentarios -> ControllerComentarioProducto($_GET["id"]);
                    } catch (Exception $e) {
                        $comen = null;
                        throw $e;
                    }
                    $aux = 1;
                    if ($comen != null) {
                        foreach($comen as $fila) { 
                            if ($aux<=3){
                            ?>
                                <p class="pro" id="nameuse1"><?php 
                                    $usercomen = $objuser -> ControllerBuscarCliente($fila[1]);
                                    echo $usercomen[0][1]." ".$usercomen[0][2];
                                ?></p>
                                <p class="pro" id="comen1"><textarea name="comentario1" id="" cols="50" rows="3" readonly><?php echo $fila[0]?></textarea></p>
                            <?php
                                 $aux = $aux + 1;
                            }
                        }
                    } else { ?>
                        <p id="nameuse2">No hay comentarios</p>
                    <?php }
                ?>
            </article>
        </article>
    </article>
    <article id="bot">
        <article id="caracteristicas">
            <p class="pro1" id="caracteristica_titu">Caracteristicas del Producto:</p>
            <p class="pro1" id="carac"><textarea name="carac" id="" cols="100" rows="15" readonly>
                <?php 
                    $objtienda = new ControllerTienda();
                    $objpro = new ControllerProducto();
                    $pro = $objpro -> ControllerDatosProducto($_GET["id"]);
                    $pro_tienda = $listar[0][6];
                    $dato = $objtienda->ControllerBuscarTienda($pro_tienda);

                    echo "\nNombre: ".$pro[0][1]."\n";
                    echo "\n";
                    echo "Descripción:\n";
                    echo $pro[0][3];
                    echo "\n";
                    echo "\nGenero: ".$pro[0][9]."\n";
                    echo "\n";
                    echo "\nTienda: ".$dato[0][1]."\n";
                    echo "\n";
                    echo "\nDirección: ".$dato[0][2]."\n";
                    echo "\n";
                    echo "\nTelefono: ".$dato[0][3]."\n";
                    echo "\n";
                    echo "\nValorado por la critica con: ".$pro[0][4]." puntos.\n";
                ?>        
            </textarea></p>
        </article>
        
        <article id="vendidas">
            <p id="titu_vendidas">Unidades vendidas:</p>
            <p id="vendidas">
                <?php
                    $objpedido = new ControllerPedido();
                    echo $cant = $objpedido -> ControllerContarProducto($_GET["id"]);
                ?>
            </p>
        </article>
    </article>
</section>
</body>
</html>
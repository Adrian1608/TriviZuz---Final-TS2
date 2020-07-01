<?php  
    $id_producto = $_GET["id"];
    include_once"../controller/controllerProducto.php";
    include_once"../controller/controllerTienda.php";
    $objproducto = new ControllerProducto();
    $listar = $objproducto->ControllerDatosProducto($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web: <?php echo $listar[0][1]?></title>
    <link rel="stylesheet" type="text/css" href="../css/estilo_web_pro.css">
</head>
<body>
    <section id="cont1">
        <p id="titu"><?php echo $listar[0][1]?></p>
        <p id="img3"><img id="img1" src="../img/<?php echo $listar[0][0]?>.jpg" width="500" height="500"></p>
        <p class="cap" id="descripcion"><?php 
            $objtienda = new ControllerTienda();
            $objpro = new ControllerProducto();
            $pro = $objpro -> ControllerDatosProducto($_GET["id"]);
            $pro_tienda = $listar[0][6];
            $dato = $objtienda->ControllerBuscarTienda($pro_tienda);
            echo $pro[0][3]
        ?></p>
        <p class="cap" id="Genero">Genero: <?php echo $pro[0][9]?></p>
        <p class="cap" id="Tienda">Tienda: <?php echo $dato[0][1]?></p>
        <p class="cap" id="Direccion">Dirección: <?php echo $dato[0][2]?></p>
        <p class="cap" id="Telefono">Telefono: <?php echo $dato[0][3]?></p>
        <p class="cap" id="Valoracion">Valoración: <?php echo $pro[0][4]?> puntos</p>
    </section>
</body>
</html>
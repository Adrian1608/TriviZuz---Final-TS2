<html>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<head>
<?php
    if(isset($_POST["busqueda"])){
        $busqueda = ': ' . $_POST["busqueda"];
    }else{
        $busqueda = '';
    }
        ## Busqueda superior es la busqueda en todo mientras busqueda limitada es solo en esa categoria
        ## Solo se puede dar 1 a la vez logicamente, y eso dice la codicional

?>
    <title>Buscando en Trivizuz<?php echo $busqueda;?> </title>
    <link rel="icon" href="../img/3vzuz icono.ico">
</head>

<header id="superior">
    <img class="logo" src="../img/3vzuz_logo.png">
    <div class="elcabecera">
    <div class="cabecera"><a href="nosotros.php">Sobre nosotros</a></div>
    <div class="cabecera"><a href="busqueda.php">Videojuegos</a></div>
    <div class="cabecera"><a href="busqueda.php">Equipos</a></div>
    <div class="cabecera"><a href="busqueda.php">Ofertas</a></div>
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
        <option name="llegada">Fecha de llegada</option>
    </select></div>
    <div><select>
        <option name="ninguno">Categorías:</option>
        <option name="accion">Accion</option>
        <option name="aventura">Aventura</option>
        <option name="estrategia">Estrategia</option>
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
    <?php $item_x_pagina = 30; ##Cada página tendrá 30 items para mostrar máximo jsjs ?>
    <div class="producto"><a href="busqueda.php"><div class="texto">Fire Emblem Fates: Birthright</div>
    <img src="../img/wp1844118-fire-emblem-wallpapers.jpg" width="225px" height="225px"/></a></div>

    <div class="producto"><a href="busqueda.php"><div class="texto">Fire Emblem Fates: Conquest</div>
    <img src="../img/wp1844120-fire-emblem-wallpapers.jpg" width="225px" height="225px"/></a></div>
    
    <div class="producto"><a href="busqueda.php"><div class="texto">Fire Emblem Fates: Revelations</div>
    <img src="../img/wp1844129-fire-emblem-wallpapers.jpg" width="225px" height="225px"/></a></div>

    <div class="producto"><a href="busqueda.php"><div class="texto">Fire Emblem Echoes</div>
    <img src="../img/wp1844140-fire-emblem-wallpapers.png" width="225px" height="225px"/></a></div>

    <div class="producto"><a href="busqueda.php"><div class="texto">Fire Emblem Fates Shadows of Valentia</div>
    <img src="../img/wp1844153-fire-emblem-wallpapers.png" width="225px" height="225px"/></a></div>

    <div class="producto"><a href="busqueda.php">Fire Emblem Fates:Birthright</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Fates:Conquest</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Fates:Revelations</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Echoes</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Shadows Of Valentia</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Fates:Birthright</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Fates:Conquest</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Fates:Revelations</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Echoes</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Shadows Of Valentia</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Fates:Birthright</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Fates:Conquest</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Fates:Revelations</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Echoes</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Shadows Of Valentia</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Fates:Birthright</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Fates:Conquest</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Fates:Revelations</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Echoes</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Shadows Of Valentia</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Fates:Birthright</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Fates:Conquest</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Fates:Revelations</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Echoes</a></div>
    <div class="producto"><a href="busqueda.php">Fire Emblem Shadows Of Valentia</a></div>
</body>

<footer></footer>
<table class="paginacion">
    <td><a href="busqueda.php"><<</a></td>
    <td><a href="busqueda.php">1</a></td>
    <td><a href="busqueda.php">2</a></td>
    <td><a href="busqueda.php">3</a></td>
    <td><a href="busqueda.php">4</a></td>
    <td><a href="busqueda.php">5</a></td>
    <td><a href="busqueda.php">>></a></td>
</table>

</html>
<html>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/estilo1.css">
<head>
<?php
    if(isset($_POST["busqueda_limitada"])){
        $busqueda = ': ' . $_POST["busqueda_limitada"];
    }else if(isset($_POST["busqueda_superior"])){ ## Esta parte es para que el titulo diga por ejemplo "Buscando en TriviZuz: Zapatillas"
        $busqueda = ': ' . $_POST["busqueda_superior"];
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
    <div><a href="busqueda.php">Sobre nosotros</a></div>
    <div><a href="busqueda.php">Videojuegos</a></div>
    <div><a href="busqueda.php">Equipos</a></div>
    <div><a href="busqueda.php">Ofertas</a></div>
    <nav>
        <form method="post" action="busqueda.php">
            <input type="text" placeholder="Buscar..." name="busqueda_superior">
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
    <nav>
        <form method="post" action="busqueda.php">
            <input type="text" placeholder="Buscar..." name="busqueda_limitada">
            <button type="submit" value="Buscar">Buscar</button>
    </nav>
</form>
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
    <div class="producto">Fire Emblem Fates:Birthright</div>
    <div class="producto">Fire Emblem Fates:Conquest</div>
    <div class="producto">Fire Emblem Fates:Revelations</div>
    <div class="producto">Fire Emblem Echoes</div>
    <div class="producto">Fire Emblem Shadows Of Valentia</div>
    <div class="producto">Fire Emblem Fates:Birthright</div>
    <div class="producto">Fire Emblem Fates:Conquest</div>
    <div class="producto">Fire Emblem Fates:Revelations</div>
    <div class="producto">Fire Emblem Echoes</div>
    <div class="producto">Fire Emblem Shadows Of Valentia</div>
    <div class="producto">Fire Emblem Fates:Birthright</div>
    <div class="producto">Fire Emblem Fates:Conquest</div>
    <div class="producto">Fire Emblem Fates:Revelations</div>
    <div class="producto">Fire Emblem Echoes</div>
    <div class="producto">Fire Emblem Shadows Of Valentia</div>
    <div class="producto">Fire Emblem Fates:Birthright</div>
    <div class="producto">Fire Emblem Fates:Conquest</div>
    <div class="producto">Fire Emblem Fates:Revelations</div>
    <div class="producto">Fire Emblem Echoes</div>
    <div class="producto">Fire Emblem Shadows Of Valentia</div>
    <div class="producto">Fire Emblem Fates:Birthright</div>
    <div class="producto">Fire Emblem Fates:Conquest</div>
    <div class="producto">Fire Emblem Fates:Revelations</div>
    <div class="producto">Fire Emblem Echoes</div>
    <div class="producto">Fire Emblem Shadows Of Valentia</div>
</body>

<footer>
<table>
    <td><a href="busqueda.php"><<</a></td>
    <td><a href="busqueda.php">1</a></td>
    <td><a href="busqueda.php">2</a></td>
    <td><a href="busqueda.php">3</a></td>
    <td><a href="busqueda.php">4</a></td>
    <td><a href="busqueda.php">5</a></td>
    <td><a href="busqueda.php">>></a></td>
</table>
</footer>

</html>
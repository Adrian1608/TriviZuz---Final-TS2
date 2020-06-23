<html>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/estilo_busqueda.css">
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
    <div>Sobre nosotros</div>
    <div>Videojuegos</div>
    <div>Equipos</div>
    <div>Ofertas</div>
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
<p>Bienvenidos a 3VZuz : V de Veracidad, Velocidad y Vondad</p>

<?php
    ##Esta será la página de búsqueda
?>


</html>
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

<header>
    <div>Sobre nosotros</div>
    <div>Videojuegos</div>
    <div>Equipos</div>
    <div>Ofertas</div>
    <div>
        <form method="post" action="busqueda.php">
            <input type="text" placeholder="Buscar..." name="busqueda_superior">
            <button type="submit" value="Buscar">Buscar</button>
        </form>
    </div>
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


<form method="post" action="busqueda.php">
    <input type="text" placeholder="Buscar..." name="busqueda_limitada">
    <button type="submit" value="Buscar">Buscar</button>
</form>

<?php
    ##Esta será la página de búsqueda
?>


</html>
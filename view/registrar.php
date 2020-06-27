<?php

if(isset($_POST["busqueda"])){
    $busqueda = ': ' . $_POST["busqueda"];
}else{
    $busqueda = '';
}
?>

<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<head>

    <title>Buscando en Trivizuz<?php echo $busqueda;?> </title>
    <link rel="icon" href="../img/3vzuz icono.ico">
</head>

<header id="superior">
    <img class="logo" src="../img/3vzuz_logo.png">
    <div class="elcabecera">
    <div class="cabecera"><a href="busqueda.php">Sobre nosotros</a></div>
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
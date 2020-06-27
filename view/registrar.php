<html>
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
<body>
    <h2>Registrar</h2>
    <form method="post" action="registrar.php">
        Nombre:<input name="nombre" type="text" placeholder="Nombre..." required><br><br>
        Apellido:<input name="apellido" type="text" placeholder="Apellido..." required><br><br>
        Telefono:<input name="telefono" type="text" placeholder="Telefono..."><br><br>
        Usuario:<input name="usuario" type="text" placeholder="Usuario..." required><br><br>
        Contraseña:<input name="contraseña" type="password" placeholder="" required><br><br>
        <button type="submit" value="Registrar">Registrar</button>
        OJO ESTO AUN NO FUNCIONA, aun falta vincular esto a la base de datos con el controller
    </form>
</body>


</html>
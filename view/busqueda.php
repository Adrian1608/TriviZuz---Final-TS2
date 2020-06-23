<html>
<meta charset="UTF-8">
<head>
<?php
    if(isset($_POST["busqueda"])){
        $busqueda = ': ' . $_POST["busqueda"];
    }else{ ## Esta parte es para que el titulo diga por ejemplo "Buscando en TriviZuz: Zapatillas"
        $busqueda = "";
    }
?>
    <title>Buscando en Trivizuz<?php echo $busqueda;?> </title>
    <link rel="icon" href="../img/3vzuz icono.ico">
</head>

<form method="post" action="busqueda.php">
    <input type="text" placeholder="Buscar producto..." name="busqueda">
    <button type="submit" value="Buscar">Buscar</button>
</form>



<?php
    ##Esta será la página de búsqueda
?>


</html>
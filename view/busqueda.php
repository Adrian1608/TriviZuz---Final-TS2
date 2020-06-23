<html>
<meta charset="UTF-8">
<head>
<?php
    if(isset($_POST["busqueda"])){
        $busqueda = ': ' . $_POST["busqueda"];
    }else{
        $busqueda = "";
    }
?>
    <title>Buscando en Trivizuz<?php echo $busqueda;?> </title>
</head>

<form method="post" action="busqueda.php">
    <input type="text" placeholder="Buscar producto..." name="busqueda">
    <button type="submit" value="Buscar">Buscar</button>
</form>

<br>
<p>Que conste porfavor que esto aun es lo super basico:B</p>

<?php
    ##Esta será la página de búsqueda
?>


</html>
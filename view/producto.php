<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivizus: Sobre Nosotros</title>
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
<section id="cont1">
    <aside id="izq">
        <article id="pro_ima">
            <p id="titulo_ima_pro">Producto: #</p>
            <img id="img1" src="#" width="500" height="500">
        </article>
        <article id="comentario">
            <form action="#">
                <p id="deje_comen">Deje un comentario:</p>
                <p id="comen"><textarea name="comentario" id="" cols="50" rows="1"></textarea></p>
                <select name="dist" id="dist">
                <option value="basic">Distribuidores</option>
                </select>
                <br>
                <select name="plat" id="plat">
                <option value="basic_plat">Plataformas</option>
                </select>
                <br>
                <select name="des" id="des">
                <option value="basic_des">Desarrolladores</option>
                </select>
                <input id="enviar" type="submit" value="Enviar">
            </form>
        </article>
    </aside>
    <article id="cont">
        <article id="top_pro">
            <article id="calificacion">
                <form action="#">
                    <p id="titu_clas">Clasificación:</p>
                    <p class="clasi">
                            <input id="radio1" type="radio" name="estrellas" value="5">
                            <label class="titu" id="pop" for="radio1">★</label>
                            <input id="radio2" type="radio" name="estrellas" value="4">
                            <label class="titu" for="radio2">★</label>
                            <input id="radio3" type="radio" name="estrellas" value="3">
                            <label class="titu" for="radio3">★</label>
                            <input id="radio4" type="radio" name="estrellas" value="2">
                            <label class="titu" for="radio4">★</label>
                            <input id="radio5" type="radio" name="estrellas" value="1">
                            <label class="titu"  for="radio5">★</label>
                    </p>
                    <select name="dist1" id="dist1">
                    <option value="basic">Distribuidores</option>
                    </select>
                    
                    <select name="plat1" id="plat1">
                    <option value="basic_plat">Plataformas</option>
                    </select>
                    
                    <select name="des1" id="des1">
                    <option value="basic_des">Desarrolladores</option>
                    </select>
                    <input id="filtrar" type="submit" value="Filtrar">
                </form>
            </article>
            <article id="precio">
                <form action="#">
                    <p id="titu_pre">Precio:</p>
                    <select name="plat2" id="plat2">
                    <option value="basic_plat2">Plataformas</option>
                    </select>
                    <select name="dist2" id="dist2">
                    <option value="basic2">Distribuidores</option>
                    </select>
                    <input id="mostar" type="submit" value="Mostar">
                </form>
            </article>
            <article id="com_users">
                <p id="titu_comen_use">Comentarios de usuarios:</p>
                <p class="pro" id="nameuse1">Usuario: #</p>
                <p class="pro" id="comen1"><textarea name="comentario1" id="" cols="50" rows="3" readonly>#comentario</textarea></p>
                <p class="pro" id="nameuse2">Usuario: #</p>
                <p class="pro" id="comen2"><textarea name="comentario1" id="" cols="50" rows="3" readonly>#comentario</textarea></p>
                <p class="pro" id="nameuse3">Usuario: #</p>
                <p class="pro" id="comen3"><textarea name="comentario1" id="" cols="50" rows="3" readonly>#comentario</textarea></p>
            </article>
        </article>
    </article>
    <article id="bot">
        <article id="caracteristicas">
            <p class="pro1" id="caracteristica_titu">Caracteristicas del Producto:</p>
            <p class="pro1" id="carac"><textarea name="carac" id="" cols="100" rows="15" readonly>#caracteristicas</textarea></p>
        </article>
        
        <article id="vendidas">
        <form action="#">
            <p id="titu_vendidas">Unidades vendidas:</p>
            <p id="vendidas">#</p>
            <select name="plat3" id="plat3">
            <option value="basic_plat3">Plataformas</option>
            </select>
            <select name="dist3" id="dist3">
            <option value="basic3">Distribuidores</option>
            </select>
            <input id="mostar2" type="submit" value="Mostar">
        </form>
        </article>
    </article>
</section>
</body>
</html>
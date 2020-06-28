<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivizus: Sobre Nosotros</title>
    <link rel="icon" href="../img/3vzuz_logo.png">
    <link rel="stylesheet" type="text/css" href="../css/estilos_nosotros.css">
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
<section class="contenido">
    <article id="nosotros">
        <h1 class="titu_nosotros">>Nosotros<</h1>
        <p id="c1">"Somos una empresa emergente que busca ser el vinculo
            entre tiendas y compradores de tal forma que la informacion en relació
            a distintos productos gaming llegue de igual media hacia todos los 
            interesados".
        </p>
    </article>
    <article id="mision">
        <h1 class="titu_nosotros">>Misión<</h1>
          <p id="c2">"Brindar acceso a productos gaming de 
              calidad, permitiendo al usuario tener una gama amplia
              de donde escoger su producto, ademas de poder tener una 
              reseña de otros compradores".
          </p>
     </article>
    <article id="vision">
        <h1 class="titu_nosotros">>Visión<</h1>
        <p id="c3"> "Permitir que mas usuarios tengan acceso a distintos productos
            desde donde se encuentren, con confianza de que su compra se 
            realizara de forma segura, ademas de poder recibir uns reseña 
            previa".
        </p>
    </article>
</section>
</body>
</html>
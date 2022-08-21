<?php
    session_start();
    include_once('Conexion.php');
    $id = $_SESSION['id'];
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['ap'];
    if(!isset($id,$nombre,$apellido)){
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CATALOGO</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta charset="utf-8"> <!-- Caracter especial -->
        <link rel="stylesheet" href="estilos/styleCatalogo.css"> 
        <link rel="shortcut icon" href="Img/Almacen.png">
    </head>
    <body> <!-- Cuerpo -->
        <div class="contenedor"> 
            <main class="cuerpo"> <!-- Contenedor -->
                <article onclick=" location.href='Producto.php?id=Catalogo'; " > <!-- Producto -->
                    <img src="Img/producto.png" alt="catalogo">
                    <p class="BTN_S">PRODUCTOS</p>
                </article>
                <article onclick=" location.href='Proveedor.php?id=Catalogo'; " > <!-- Proveedor -->
                    <img src="Img/proveedor.png" alt="proceso">
                    <p class="BTN_S">PROVEEDOR</p>
                </article>
                <article onclick=" location.href='Partida.php?id=Catalogo'; " > <!-- Partida -->
                    <img src="Img/partida.png" alt="consulta">
                    <p class="BTN_S">PARTIDAS</p>
                </article>
                <article onclick=" location.href='Programa.php?id=Catalogo'; " > <!-- Programa -->
                    <img src="Img/programa.png" alt="catalogo">
                    <p class="BTN_S">PROGRAMA</p>
                </article>
                <article onclick=" location.href='Centro.php?id=Catalogo'; " > <!-- Centro -->
                    <img src="Img/centro.png" alt="proceso">
                    <p class="BTN_S">CENTROS</p>
                </article>
                <article onclick=" location.href='Licitacion.php?id=Catalogo'; " > <!-- Licitacion -->
                    <img src="Img/licitacion.png" alt="consulta">
                    <p class="BTN_S">LICITACION</p>
                </article>
                <article onclick=" location.href='Financiamiento.php?id=Catalogo'; " > <!-- Financiamiento -->
                    <img src="Img/financiamiento.png" alt="consulta">
                    <p class="BTN_S">FINANCIAMIENTO</p>
                </article>
            </main>
            <footer class="pie"> <!-- Pie de página --> 
                <a href="Inicio.php" class="BTMC">MENÚ PRINCIPAL</a>   
                <a href="Cerrar.php" class="BTMC">CERRAR SESIÓN</a>
            </footer>
        </div>
    </body>
</html>

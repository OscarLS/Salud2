<?php
    session_start();
    include_once('Conexion.php');
    $id = $_SESSION['id'];
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['ap'];
    if(!isset($id,$nombre,$apellido)){
        header("location: login.php");
    }
	$Identificador = $_GET['id'];
	$qry = "SELECT * FROM categoria WHERE Id = '$Identificador'";
    $resultado = mysqli_query($conn, $qry);
    while ($reg = mysqli_fetch_array($resultado)) {
		$id = $reg['Id'];
		$categoria = $reg['Categoria'];
    } 
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ACTUALIZAR CATEGORIA</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta charset="utf-8"> <!-- Caracter especial -->
		<link rel="stylesheet" href="estilos/styleActualizar.css">
		<link rel="shortcut icon" href="Img/Almacen.png">
	</head>
<body> <!-- Cuerpo -->
	<div class="contenedor"> 
		<header class="cabecera"> <!-- Cabecera -->
			<h3>Actualizar Categoria</h3>
		</header>
		<main class="cuerpo"> <!-- Contenedor -->
			<form action="ActualizarCategoria.php" method="post" name="Alta">
            <article class="alta">
			<input type="hidden" name="id" autocomplete="off" value ="<?php echo $id;?>">
            <table class="Tabla"> 
					<tr> 
						<td class="lD"> Categoria: </td>
					</tr>
                    <tr> 
						<td> <input type="text" class="input_1"  name="categoria" value ="<?php echo $categoria;?>" autocomplete="off"> </td>
					</tr>
				</table>
                <input class="BTG" type="submit" value="Actualizar">
            </form>
                <a href="Categoria.php" class="BTG">Cancelar</a>
            </article>
		</main>
	</div>
</body>
</html>
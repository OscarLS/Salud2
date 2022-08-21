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
	$qry = "SELECT * FROM proveedor WHERE Id = '$Identificador'";
    $resultado = mysqli_query($conn, $qry);
    while ($reg = mysqli_fetch_array($resultado)) {
		$id = $reg['Id'];
		$nombre = $reg['Nombre'];
		$rfc = $reg['Rfc'];
		$telefono = $reg['Telefono'];
		$correo = $reg['Correo'];
		$direccion = $reg['Direccion'];
    } 
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ACTUALIZAR PROVEEDOR</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta charset="utf-8"> <!-- Caracter especial -->
		<link rel="stylesheet" href="estilos/styleActualizar.css">
		<link rel="shortcut icon" href="Img/Almacen.png">
	</head>
<body> <!-- Cuerpo -->
	<div class="contenedor"> 
		<header class="cabecera"> <!-- Cabecera -->
			<h3>Actualizar Proveedor</h3>
		</header>
		<main class="cuerpo"> <!-- Contenedor -->
			<form action="ActualizarProveedor.php" method="post" name="Alta">
            <article class="alta">
            <input type="hidden" name="id" autocomplete="off" value ="<?php echo $id;?>">
            <table class="Tabla"> 
					<tr> 
						<td class="lD"> Nombre: </td>
						<td class="lD"> Rfc: </td>
					</tr>
					<tr>
						<td> <input type="text" class="input_1" name="nombre" value ="<?php echo $nombre;?>" autocomplete="off"> </td>
						<td> <input type="text" class="input_2" name="rfc" value ="<?php echo $rfc;?>" autocomplete="off"> </td>
					</tr> 
					<tr> 
						<td class="lD" > Telefono: </td>
						<td class="lD"> Correo: </td>
					</tr>
					<tr>
						<td> <input type="text" class="input_1" name="telefono" value ="<?php echo $telefono;?>" autocomplete="off"> </td>
						<td> <input type="text" class="input_2" name="correo" value ="<?php echo $correo;?>" autocomplete="off"> </td>
					</tr>
					<tr> 
						<td class="lD"> Direccion: </td>
					</tr>
					<tr> 
						<td  colspan="2"> <input type="text" class="input_6" name="direccion" value ="<?php echo $direccion;?>" autocomplete="off"> </td>
					</tr>
				</table>
				<input class="BTG" type="submit" value="Actualizar">
            </form>
                <a href="Proveedor.php" class="BTG">Cancelar</a>
            </article>
		</main>
	</div>
</body>
</html>
